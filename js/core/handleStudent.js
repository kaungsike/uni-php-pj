import { student_like_btn } from "./selectors.js";

const handleStudent = () => {
    student_like_btn && student_like_btn.forEach((btn) => {

        btn.addEventListener("click", async (e) => {

            const is_like = e.target.getAttribute("liked");
            const post_id = e.target.getAttribute("post_id");

            const svg = e.target.querySelector("svg")
            const count = e.target.querySelector("#count")

            console.log(count);

            if (is_like == '1') {
                console.log("Already Liked");
                try {
                    const response = await fetch("./save_student_like.php", {
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
                    const response = await fetch("./save_student_like.php", {
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
}

export default handleStudent;