// import toastify from "toastify-js.";
import { approve_btn, closeModal_btn, comment_btn, monitor_new_feedback_form, open_comment_container, refuse_btn, signin_form, student_new_feedback_form } from "./selectors.js";

const listener = () => {
    approve_btn.forEach((btn) => {
        btn.addEventListener("click", async (e) => {
            const post_id = e.target.getAttribute("post_id");
            const button = e.target;

            if (!post_id) {
                console.error("Error: Missing post_id");
                return;
            }

            button.innerHTML = ` <svg class="text-gray-300 hover:bg-current w-full animate-spin" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"
    width="24" height="24">
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
                const response = await fetch("./monitor_approve_post.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ post_id: post_id })
                });

                const data = await response.json(); // Expecting JSON

                console.log("PHP Response:", data);

                if (data.success) {
                    button.textContent = "Approved";
                } else {
                    button.textContent = "Error! Try again";
                    button.disabled = false;
                }

            } catch (error) {
                console.error("Fetch error:", error);
                button.textContent = "Error! Try again";
                button.disabled = false;
            }
        });
    });

    refuse_btn.forEach((btn) => {
        btn.addEventListener("click", async (e) => {
            const post_id = e.target.getAttribute("post_id");
            const button = e.target;
            console.log(e.target);

            if (!post_id) {
                console.error("Error: Missing post_id");
                return;
            }

            console.log("Refusing post_id:", post_id);

            button.innerHTML = ` <svg class="text-gray-300 hover:bg-current w-full animate-spin" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"
    width="24" height="24">
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
                const response = await fetch("./monitor_refuse_post.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ post_id: post_id })
                });

                const data = await response.json(); // Expecting JSON

                console.log("PHP Response:", data);

                if (data.success) {
                    button.textContent = "Refused";
                } else {
                    button.textContent = "Error! Try again";
                    button.disabled = false;
                }

            } catch (error) {
                console.error("Fetch error:", error);
                button.textContent = "Error! Try again";
                button.disabled = false;
            }
        });
    });

    if (signin_form) {
        signin_form.addEventListener("submit", async (e) => {
            e.preventDefault();

            const button = e.target.querySelector("#signin_btn");

            const formData = new FormData(signin_form)
            const email = formData.get("email");
            const password = formData.get("password");

            console.log("info requesting... ", email, password);

            button.innerHTML = ` <svg class="text-gray-300 hover:bg-current w-full animate-spin" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"
    width="24" height="24">
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

                const response = await fetch("./save_signin.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ email: email, password: password })

                })

                const data = await response.json();

                console.log("PHP Response:", data);

                if (data) {
                    if (data == "student") {
                        location.href = "./student_profile.php";
                        return;
                    }

                    if (data == "monitor") {
                        location.href = "./monitor_profile.php";
                        return;
                    }

                    return;

                } else {
                    button.textContent = "Error! Try again";
                    button.disabled = false;
                }



            } catch (error) {
                console.error("Try fail..", error);
            }




        })
    }

    monitor_new_feedback_form && monitor_new_feedback_form.addEventListener("submit", async (e) => {
        e.preventDefault();
        console.log("submit");

        const button = e.target.querySelector("#monitor_new_feedback_btn");

        console.log(button);

        const formData = new FormData(monitor_new_feedback_form)
        const post_as_anonymous = formData.get("post_as_anonymous");
        const context = formData.get("context");

        console.log("info requesting... ", post_as_anonymous, context);

        button.innerHTML = `  <svg class="text-gray-300 hover:bg-current w-full animate-spin" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"
    width="24" height="24">
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

            const response = await fetch("./save_monitor_newfeedback.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ post_as_anonymous: post_as_anonymous, context: context })

            })

            const data = await response.json();

            console.log("PHP Response:", data);

            if (data) {
                button.textContent = `Posted`;
                button.disabled = false;
                closeModal_btn.click();


            } else {
                button.textContent = "Error! Try again";
                button.disabled = false;
            }



        } catch (error) {
            console.error("Try fail..", error);
        }




    })

    student_new_feedback_form && student_new_feedback_form.addEventListener("submit", async (e) => {
        e.preventDefault();
        console.log("submit");

        const button = e.target.querySelector("#student_new_feedback_btn");

        const formData = new FormData(student_new_feedback_form)
        const post_as_anonymous = formData.get("post_as_anonymous");
        const context = formData.get("context");

        console.log("info requesting... ", post_as_anonymous, context);

        button.innerHTML = `
  <svg class="text-gray-300 hover:bg-current w-full animate-spin" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"
    width="24" height="24">
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

            const response = await fetch("./save_student_newfeedback.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ post_as_anonymous: post_as_anonymous, context: context })

            })

            const data = await response.json();

            console.log("PHP Response:", data);

            if (data) {
                button.textContent = `Posted`;
                button.disabled = false;
                closeModal_btn.click();


            } else {
                button.textContent = "Error! Try again";
                button.disabled = false;
            }



        } catch (error) {
            console.error("Try fail..", error);
        }




    })

    comment_btn && comment_btn.forEach((btn) => {

        btn.addEventListener("click", async (e) => {

            const current_post_id = e.target.getAttribute("post_id");


            const post_comment_box = document.querySelector(`[post_comment_box_id="${current_post_id}"]`);

            post_comment_box.classList.toggle("hidden");
            post_comment_box.classList.toggle("p-0");

            return;

            container = open_comment_container

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


};

export default listener;
