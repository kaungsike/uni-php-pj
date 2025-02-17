import { approve_btn, refuse_btn } from "./selectors.js";

const listener = () => {
    approve_btn.forEach((btn) => {
        btn.addEventListener("click", async (e) => {
            const post_id = e.target.getAttribute("post_id");
            const button = e.target;

            if (!post_id) {
                console.error("Error: Missing post_id");
                return;
            }

            button.textContent = `Approving...`;
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

            button.textContent = `Refusing...`;
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
};

export default listener;
