import { approve_btn, new_feedback_form, refuse_btn, signin_btn, signin_form } from "./selectors.js";

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

    if(signin_form){
        signin_form.addEventListener("submit", async (e) => {
            e.preventDefault();
    
            const button = e.target.querySelector("#signin_btn");
    
            const formData = new FormData(signin_form)
            const email = formData.get("email");
            const password = formData.get("password");
    
            console.log("info requesting... ", email, password);
    
            button.textContent = `Signing...`;
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
                    if(data=="student"){
                        location.href = "./student_profile.php";
                        return;
                    }
    
                    if(data=="monitor"){
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

    new_feedback_form.addEventListener("submit", async (e) => {
        e.preventDefault();
        console.log("submit");

        const button = e.target.querySelector("#new_feedback_btn");

        console.log(button);

        const formData = new FormData(new_feedback_form)
        const post_as_anonymous = formData.get("post_as_anonymous");
        const context = formData.get("context");

        console.log("info requesting... ", post_as_anonymous, context);

        button.textContent = `Posting...`;
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
        

            } else {
                button.textContent = "Error! Try again";
                button.disabled = false;
            }



        } catch (error) {
            console.error("Try fail..", error);
        }




    })
};

export default listener;
