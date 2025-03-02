
import { monitor_comment_form, monitor_like_btn } from "./selectors.js";

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

            console.log(comment_group);

            const form = e.target;
            const button = form.querySelector("#form_button");
            const input = form.querySelector("#input_comment");
            console.log(button);

            const formData = new FormData(form);
            const context = formData.get("context");
            console.log(context);

            input.value = "";

            button.innerHTML = `<svg class="text-gray-300 hover:bg-current w-full animate-spin" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
            <path
              d="M32 3C35.8083 3 39.5794 3.75011 43.0978 5.20749C46.6163 6.66488 49.8132 8.80101 52.5061 11.4939C55.199 14.1868 57.3351 17.3837 58.7925 20.9022C60.2499 24.4206 61 28.1917 61 32C61 35.8083 60.2499 39.5794 58.7925 43.0978C57.3351 46.6163 55.199 49.8132 52.5061 52.5061C49.8132 55.199 46.6163 57.3351 43.0978 58.7925C39.5794 60.2499 35.8083 61 32 61C28.1917 61 24.4206 60.2499 20.9022 58.7925C17.3837 57.3351 14.1868 55.199 11.4939 52.5061C8.801 49.8132 6.66487 46.6163 5.20749 43.0978C3.7501 39.5794 3 35.8083 3 32C3 28.1917 3.75011 24.4206 5.2075 20.9022C6.66489 17.3837 8.80101 14.1868 11.4939 11.4939C14.1868 8.80099 17.3838 6.66487 20.9022 5.20749C24.4206 3.7501 28.1917 3 32 3L32 3Z"
              stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path
              d="M32 3C36.5778 3 41.0906 4.08374 45.1692 6.16256C49.2477 8.24138 52.7762 11.2562 55.466 14.9605C58.1558 18.6647 59.9304 22.9531 60.6448 27.4748C61.3591 31.9965 60.9928 36.6232 59.5759 40.9762"
              stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" class="text-gray-900">
            </path>
          </svg>`;

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


            } catch (error) {
                console.error("Try fail..", error);
            }



        })
    })


    // comment_reply_btn.forEach((btn) => {
    //     btn.addEventListener("click", (e) => {

    //         const post_id = e.target.getAttribute("post_id");

    //         const commentBox = e.target.closest(".comment_box");
    //         const parent_id = commentBox.querySelector(".name").getAttribute("comment_id")
    //         const name = commentBox.querySelector(".name").innerText
    //         const comment_form = document.querySelector(`.comment_form[post_id='${post_id}']`);
    //         const comment_form_input = comment_form.querySelector("#input_comment");
    //         const closeBtn = document.querySelector(`.close_reply_mention_box_btn[post_id='${post_id}']`)
    //         const replyMentionBox = document.querySelector(`.reply_mention_box[post_id='${post_id}']`)

    //         replyMentionBox.classList.remove("hidden");
    //         replyMentionBox.querySelector(".reply_to").innerHTML = "Reply to ";
    //         comment_form_input.focus();
    //         replyMentionBox.querySelector("input").value = "";
    //         replyMentionBox.querySelector("input").value = " " + name;
    //         replyMentionBox.querySelector("input").setAttribute("parent_id", "");
    //         replyMentionBox.querySelector("input").setAttribute("parent_id", parent_id);

    //         console.log(parent_id);

    //         closeBtn.addEventListener("click", () => {
    //             replyMentionBox.classList.add("hidden");
    //         })
    //     })
    // })



}

export default handleMonitor;

