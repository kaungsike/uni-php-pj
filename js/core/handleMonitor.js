
import { comment_reply_btn, monitor_comment_form, monitor_like_btn } from "./selectors.js";

const handleMonitor = () => {

    monitor_like_btn && monitor_like_btn.forEach((btn) => {

        btn.addEventListener("click", async (e) => {

            const is_like = e.target.getAttribute("liked");
            const post_id = e.target.getAttribute("post_id");

            const svg = e.target.querySelector("svg")
            const count = e.target.querySelector("#count")

            console.log(count);

            if (is_like == '1') {
                console.log("Already Liked");
                try {
                    const response = await fetch("./save_monitor_like.php", {
                        method: "POST",
                        headers: { "Content-Type": "application/json" },
                        body: JSON.stringify({
                            post_id: post_id,
                            is_like: true
                        })
                    });

                    const data = await response.json();

                    console.log("PHP Response:", data);

                    if (data) {
                        count.textContent = data.like_count;
                        data.liked_users && data.liked_users.split(",").find(el => el == data.id)
                            ? svg.classList.add("stroke-red-500", "fill-red-500")
                            : svg.classList.remove("stroke-red-500", "fill-red-500");

                        data.liked_users && data.liked_users.split(",").find(el => el == data.id)
                            ? e.target.setAttribute("liked", "1") : e.target.setAttribute("liked", "0")

                    } else {
                        button.textContent = "Error! Try again";
                        button.disabled = false;
                    }
                } catch (error) {
                    console.error("Fetch error:", error);
                }
            } else {
                console.log("Not like yet");
                try {
                    const response = await fetch("./save_monitor_like.php", {
                        method: "POST",
                        headers: { "Content-Type": "application/json" },
                        body: JSON.stringify({
                            post_id: post_id,
                            is_like: false
                        })
                    });

                    const data = await response.json();

                    console.log("PHP Response:", data);

                    if (data) {
                        count.textContent = data.like_count;
                        data.liked_users && data.liked_users.split(",").find(el => el == data.id)
                            ? svg.classList.add("stroke-red-500", "fill-red-500")
                            : svg.classList.remove("stroke-red-500", "fill-red-500");
                        data.liked_users && data.liked_users.split(",").find(el => el == data.id)
                            ? e.target.setAttribute("liked", "1") : e.target.setAttribute("liked", "0")
                    } else {
                        button.textContent = "Error! Try again";
                        button.disabled = false;
                    }
                } catch (error) {
                    console.error("Fetch error:", error);
                }
            }

            return;

        });
    })

    monitor_comment_form && monitor_comment_form.forEach((form) => {
        form.addEventListener("submit", async (e) => {
            e.preventDefault();
            const post_id = e.target.getAttribute("post_id");

            const replyTo = document.querySelector(`.reply_to[post_id='${post_id}']`);
            const parent_id = replyTo.getAttribute("parent_id");

            const comment_group = document.querySelector(`.comment_group[post_id="${post_id}"]`);
            const total_comment = document.querySelector(`.total_comments[post_id="${post_id}"]`);
            console.log(total_comment);

            console.log(comment_group);

            const form = e.target;
            const button = form.querySelector("#form_button");
            const input = form.querySelector("#input_comment");
            console.log(button);

            const formData = new FormData(form);
            const context = formData.get("context");
            console.log(context);

            input.value = "";

            button.innerHTML = `<div class="animate-spin inline-block w-4 h-4 border-4 border-yellow-400 border-t-transparent rounded-full" role="status" aria-label="loading">
        <span class="sr-only">Loading...</span>
    </div>`;

            button.disabled = true;


            try {

                const response = await fetch("./save_monitor_comment.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ context: context, post_id: post_id, parent_id: parent_id })

                })

                const data = await response.json();

                if (data) {

                    button.innerHTML = `<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="size-5 pointer-events-none" stroke="#d4d4d4">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                            <path d="M10 14L13 21L20 4L3 11L6.5 12.5" stroke="#525252" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                          </svg>`;


                    if (parent_id) {

                        const view_reply_btn = document.querySelector(`button.view_reply_btn[post_id="${post_id}"][parent_id="${parent_id}"]`);
                        view_reply_btn && view_reply_btn.click();        

                        const close_reply_mention_box_btn = document.querySelector(`.close_reply_mention_box_btn[post_id='${post_id}']`);
                        close_reply_mention_box_btn.click();
                        comment_group.querySelector(`.reply_comment_container[parent_id='${parent_id}']`).classList.remove("hidden");
                        comment_group.querySelector(`.reply_comment_container[parent_id='${parent_id}']`).innerHTML += `
                    <div class="comment_box flex items-start gap-2.5 mt-3">
                    <img class="w-8 h-8 rounded-full" src="${data['profile_photo']}" alt="Jese image">
                    <div class="flex flex-col gap-1 w-full ">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="name text-sm font-semibold text-gray-900 dark:text-white">${data['user_name']}</span>
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">${data['created_at']}</span>
                        </div>
                        <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-neutral-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                            <p class="text-sm font-normal text-gray-900 dark:text-white">${data['content']}</p>
                        </div>
                    </div>
                </div>
                     `;




                    } else {
                        comment_group.innerHTML += `<div class="comment_box flex items-start gap-2.5 mt-3">
                                                        <img class="w-8 h-8 rounded-full" src="${data['profile_photo']}" alt="Jese image">
                                                        <div class="flex flex-col gap-1 w-full ">
                                                            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                                                <span comment_id="12" class="name text-sm font-semibold text-gray-900 dark:text-white">${data['user_name']} </span>
                                                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">${data['created_at']}</span>
                                                            </div>
                                                            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-neutral-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                                                <p class="text-sm font-normal text-gray-900 dark:text-white">${data['content']}</p>
                                                            </div>
                                                            
                                                        </div>

                                                        <button post_id="${post_id}" comment_id="${data['id']}" class="comment_reply_btn text-sm text-start font-normal text-gray-500 mt-9 dark:text-gray-400 ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 pointer-events-none">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m15 15 6-6m0 0-6-6m6 6H9a6 6 0 0 0 0 12h3"></path>
                                                            </svg>

                                                        </button>
                                                    </div>`
                    }


                    button.disabled = false;

                } else {
                    button.innerHTML = '';
                    button.textContent = "Error! Try again";
                    button.disabled = false;
                }

                total_comment.innerText = parseInt(total_comment.textContent) + 1;


            } catch (error) {
                console.error("Try fail..", error);
            }



        })
    })


    comment_reply_btn && comment_reply_btn.forEach((btn) => {
        btn.addEventListener("click", (e) => {

            const post_id = e.target.getAttribute("post_id");

            const commentBox = e.target.closest(".comment_box");
            const parent_id = commentBox.querySelector(".name").getAttribute("comment_id")
            const name = commentBox.querySelector(".name").innerText
            const comment_form = document.querySelector(`.comment_form[post_id='${post_id}']`);
            const comment_form_input = comment_form.querySelector("#input_comment");
            const closeBtn = document.querySelector(`.close_reply_mention_box_btn[post_id='${post_id}']`)
            const replyMentionBox = document.querySelector(`.reply_mention_box[post_id='${post_id}']`)

            replyMentionBox.classList.remove("hidden");
            replyMentionBox.querySelector(".reply_to").innerHTML = "Reply to ";
            comment_form_input.focus();
            replyMentionBox.querySelector("input").value = "";
            replyMentionBox.querySelector("input").value = " " + name;
            replyMentionBox.querySelector("input").setAttribute("parent_id", "");
            replyMentionBox.querySelector("input").setAttribute("parent_id", parent_id);

            console.log(parent_id);

            closeBtn.addEventListener("click", () => {
                replyMentionBox.classList.add("hidden");
            })
        })
    })



}

export default handleMonitor;

