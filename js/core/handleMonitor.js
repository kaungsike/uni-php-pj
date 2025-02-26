
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

            console.log(document.querySelector(`.comment_group[post_id="${post_id}"]`));
return;
            const form = e.target;
            const button = form.querySelector("#form_button");
            const input = form.querySelector("#input_comment");
            console.log(button);

            const formData = new FormData(form);
            const context = formData.get("context");
            console.log(context);

            input.value = "";

            button.innerHTML = `  <svg class="text-gray-300 hover:bg-current w-full animate-spin" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
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
                    body: JSON.stringify({ context: context, post_id: post_id })

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


}

export default handleMonitor;

{/* <div class="flex items-start gap-2.5">
<img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="User image">
<div class="flex flex-col w-full max-w-[320px] leading-1.5">
    <div class="flex items-center space-x-2 rtl:space-x-reverse">
        <span class="text-sm font-semibold text-gray-900 dark:text-white"><?= htmlspecialchars($data['username']) ?></span>
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400"><?= htmlspecialchars($data['timestamp']) ?></span>
    </div>
    <p class="text-sm font-normal py-2 text-gray-900 dark:text-white"><?= htmlspecialchars($data['content']) ?></p>
    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
</div>
</div> */}
