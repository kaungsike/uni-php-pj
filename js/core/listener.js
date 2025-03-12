// import toastify from "toastify-js.";
import { approve_btn, closeModal_btn, comment_btn, comment_reply_btn, default_profiles_images, dropzone_file, edit_profile_form, input_new_profile, monitor_new_feedback_form, more_image_btn, refuse_btn, signin_form, student_new_feedback_form, view_reply_btn } from "./selectors.js";

const listener = () => {
    approve_btn.forEach((btn) => {
        btn.addEventListener("click", async (e) => {
            const post_id = e.target.getAttribute("post_id");
            const button = e.target;

            if (!post_id) {
                console.error("Error: Missing post_id");
                return;
            }

            button.innerHTML = ` <svg class="text-gray-300 hover:bg-current w-full animate-spin" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" width="24"   height="24">
                                <path
                                  d="M32 3C35.8083 3 39.5794 3.75011 43.0978 5.20749C46.6163 6.66488 49.8132 8.80101 52.5061 11.4939C55.199 14.1868 57.3351 17.3837 58.7925 20.9022C60.2499 24.4206 61 28.                          1917 61 32C61 35.8083 60.2499 39.5794 58.7925 43.0978C57.3351 46.6163 55.199 49.8132 52.5061 52.5061C49.8132 55.199 46.6163 57.3351 43.0978 58.7925C39.5794 60.2499 35.8083                         61 32 61C28.1917 61 24.4206 60.2499 20.9022 58.7925C17.3837 57.3351 14.1868 55.199 11.4939 52.5061C8.801 49.8132 6.66487 46.6163 5.20749 43.0978C3.7501 39.5794 3 35.8083 3                         32C3 28.1917 3.75011 24.4206 5.2075 20.9022C6.66489 17.3837 8.80101 14.1868 11.4939 11.4939C14.1868 8.80099 17.3838 6.66487 20.9022 5.20749C24.4206 3.7501 28.1917 3 32                     3L32 3Z"
                                stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                d="M32 3C36.5778 3 41.0906 4.08374 45.1692 6.16256C49.2477 8.24138 52.7762 11.2562 55.466 14.9605C58.1558 18.6647 59.9304 22.9531 60.6448 27.4748C61.3591 31.9965 60.9928                           36.6232 59.5759 40.9762"
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
            button.innerHTML = `Loading...`;
            button.disabled = true;

            const formData = new FormData(signin_form);
            const email = formData.get("email");
            const password = formData.get("password");

            try {
                const response = await fetch("./save_signin.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ email, password }),
                });

                // Check if response is actually JSON
                const text = await response.text();
                try {
                    const data = JSON.parse(text);

                    console.log("PHP Response:", data);

                    if (data.success) {
                        alert(data.message);
                        if (data.redirect) {
                            location.href = data.redirect;
                        }
                    } else {
                        alert(data.message);
                        button.textContent = "Sign In";
                        button.disabled = false;
                    }
                } catch (jsonError) {
                    console.error("Invalid JSON Response:", text);
                    alert("Server error: Response is not valid JSON.");
                }
                signin_form.reset();
                button.textContent = "Sign In";
                button.disabled = false;

            } catch (error) {

                console.error("Fetch failed:", error);
                alert("Network error. Please try again.");
                signin_form.reset();
                button.textContent = "Sign In";
                button.disabled = false;

            }
        });

        signin_form.reset();

    }

    monitor_new_feedback_form && monitor_new_feedback_form.addEventListener("submit", async (e) => {
        e.preventDefault();
        console.log("submit");

        const button = e.target.querySelector("#monitor_new_feedback_btn");
        const image_container = document.querySelector(".post_images_container");
        const images = image_container.querySelectorAll("img");
        const there_is_no_image = image_container.querySelector(".there_is_no_image");

        const formData = new FormData(monitor_new_feedback_form);
        const post_as_anonymous = formData.get("post_as_anonymous");
        const context = formData.get("context");

        console.log("post_as_anonymous:", post_as_anonymous, "context:", context);

        const uniqueImages = new Map();

        formData.delete("images[]");

        // Process each image
        for (let i = 0; i < images.length; i++) {
            const imageSrc = images[i].src;

            if (uniqueImages.has(imageSrc)) {
                console.log("Skipping duplicate image:", imageSrc);
                continue;
            }

            uniqueImages.set(imageSrc, `image${uniqueImages.size + 1}.jpg`);

            try {

                const response = await fetch(imageSrc);
                if (!response.ok) {
                    throw new Error(`Failed to fetch image: ${imageSrc}`);
                }

                const imageBlob = await response.blob();

                // Create a File object from the Blob
                const fileName = uniqueImages.get(imageSrc);
                const file = new File([imageBlob], fileName, { type: imageBlob.type });

                // Append the file to the FormData
                formData.append("images[]", file);
            } catch (error) {
                console.error("Error processing image:", error);
            }
        }

        console.log([...formData.entries()]);

        image_container.innerHTML = "";
        image_container.append(there_is_no_image);

        // Update button state
        button.innerHTML = `<svg class="text-gray-300 animate-spin" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"
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
            // Send the FormData to the server
            const response = await fetch("./save_monitor_newfeedback.php", {
                method: "POST",
                body: formData
            });

            const text = await response.text();
            console.log("Raw response:", text);

            const data = JSON.parse(text);
            console.log("PHP Response:", data);

            if (data.success) {
                button.textContent = `Posted`;
                button.disabled = false;
                closeModal_btn.click();
            } else {
                button.textContent = "Error! Try again";
                button.disabled = false;
            }
        } catch (error) {
            console.error("Try fail..", error);
            button.textContent = "Error!";
            button.disabled = false;
        }

        monitor_new_feedback_form.reset();
    });

    student_new_feedback_form && student_new_feedback_form.addEventListener("submit", async (e) => {
        e.preventDefault();
        console.log("submit");

        const button = e.target.querySelector("#student_new_feedback_btn");
        const image_container = document.querySelector(".post_images_container");
        const images = image_container.querySelectorAll("img");

        const formData = new FormData(student_new_feedback_form);
        const post_as_anonymous = formData.get("post_as_anonymous");
        const context = formData.get("context");

        console.log("post_as_anonymous:", post_as_anonymous, "context:", context);

        const uniqueImages = new Map();

        formData.delete("images[]");

        // Process each image
        for (let i = 0; i < images.length; i++) {
            const imageSrc = images[i].src;

            if (uniqueImages.has(imageSrc)) {
                console.log("Skipping duplicate image:", imageSrc);
                continue;
            }

            uniqueImages.set(imageSrc, `image${uniqueImages.size + 1}.jpg`);

            try {

                const response = await fetch(imageSrc);
                if (!response.ok) {
                    throw new Error(`Failed to fetch image: ${imageSrc}`);
                }

                const imageBlob = await response.blob();

                // Create a File object from the Blob
                const fileName = uniqueImages.get(imageSrc);
                const file = new File([imageBlob], fileName, { type: imageBlob.type });

                // Append the file to the FormData
                formData.append("images[]", file);
            } catch (error) {
                console.error("Error processing image:", error);
            }
        }

        console.log([...formData.entries()]);

        // Update button state
        button.innerHTML = `<svg class="text-gray-300 animate-spin" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"
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
            // Send the FormData to the server
            const response = await fetch("./save_student_newfeedback.php", {
                method: "POST",
                body: formData
            });

            const text = await response.text();
            console.log("Raw response:", text);

            const data = JSON.parse(text);
            console.log("PHP Response:", data);

            if (data.success) {
                button.textContent = `Posted`;
                button.disabled = false;
                closeModal_btn.click();
            } else {
                button.textContent = "Error! Try again";
                button.disabled = false;
            }
        } catch (error) {
            console.error("Try fail..", error);
            button.textContent = "Error!";
            button.disabled = false;
        }

        student_new_feedback_form.reset();
    });

    comment_btn && comment_btn.forEach((btn) => {

        btn.addEventListener("click", (e) => {

            const current_post_id = e.target.getAttribute("post_id");


            const post_comment_box = document.querySelector(`[post_comment_box_id="${current_post_id}"]`);

            post_comment_box.classList.toggle("hidden");
            post_comment_box.classList.toggle("p-0");

            return;

        });
    })

    view_reply_btn && view_reply_btn.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            const parent_id = e.target.getAttribute("parent_id");
            const reply_container = e.target.nextElementSibling;

            e.target.innerText = "";
            reply_container.classList.remove("hidden")

        })
    })

    comment_reply_btn.forEach((btn) => {
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

    more_image_btn && more_image_btn.forEach((btn) => {
        btn.addEventListener(("click"), (e) => {
            const target = e.target;
            const post_container = target.closest(".post_container");
            const images = post_container.querySelectorAll("img");

            console.log(post_container);

            post_container.innerHTML = "";
            images.forEach((image) => {
                image.classList.remove("hidden")
                post_container.append(image);

                console.log(image)

            })

            target.remove();


        })
    })

    dropzone_file && dropzone_file.addEventListener("change", (e) => {
        const files = Array.from(e.target.files);
        const container = document.querySelector(".post_images_container");

        if (files.length > 0) {
            files.forEach(file => {
                const reader = new FileReader();

                reader.onload = function (e) {
                    const wrapper = document.createElement("div");
                    wrapper.classList.add("relative", "h-full", "w-auto", "flex", "items-center", "justify-center");

                    const img = document.createElement("img");
                    img.src = e.target.result;
                    img.classList.add("h-full", "rounded-lg", "object-cover", "border", "border-neutral-300");

                    const deleteButton = document.createElement("button");
                    deleteButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="pointer-events-none size-5">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
</svg>
`;
                    deleteButton.classList.add(
                        "absolute", "right-[5px]", "top-0", "w-[15px]", "h-[15px]",
                        "bg-white", "text-red-500", "rounded-full", "flex", "items-center", "justify-center",
                        "shadow-md", "hover:bg-gray-200", "cursor-pointer"
                    );

                    // Remove image on click
                    deleteButton.addEventListener("click", () => {
                        wrapper.remove();
                    });

                    wrapper.appendChild(img);
                    wrapper.appendChild(deleteButton);
                    container.prepend(wrapper);
                };

                reader.readAsDataURL(file);
            });
        } else {
            console.log("No files selected");
        }
    });

    default_profiles_images && default_profiles_images.forEach((image) => {
        image.addEventListener("click", (e) => {
            const target = e.target;
            const img = target.querySelector("img");
            const src = img.src;
            const profile_image = document.querySelector("#edit_profile_image");
            const hiddenProfileUrl = document.querySelector("#profile_photo_url");
            const hiddenInput = document.querySelector("#hidden_profile_base64"); // Add this hidden input in your form

            // Hidden input

            // Set the profile image preview
            profile_image.src = src;

            console.log("Selected Image URL:", src);

            // Store the selected image URL in the hidden input (instead of the file input)
            hiddenProfileUrl.value = src;
            hiddenInput.value = ""; // Clear the base64 value
        });
    });

    input_new_profile && input_new_profile.addEventListener("change", (e) => {
        const files = Array.from(e.target.files);
        const file = files[0];
        const reader = new FileReader();
        const profile_image = document.querySelector("#edit_profile_image");
        const hiddenProfileUrl = document.querySelector("#profile_photo_url");
        const hiddenInput = document.querySelector("#hidden_profile_base64"); // Add this hidden input in your form

        reader.onload = function (e) {
            profile_image.src = e.target.result; // Display the selected image
            const base64_ = e.target.result;

            console.log("Base64 Image:", base64_);

            hiddenInput.value = base64_; // Store base64 in hidden input instead
            hiddenProfileUrl.value = ""; // Clear the URL value
        };

        reader.readAsDataURL(file);
    });

    edit_profile_form && edit_profile_form.addEventListener("submit", async (e) => {
        e.preventDefault();
        console.log("Submitting...");

        const button = e.target.querySelector("#edit_profile_btn");

        const close_edit_profile_modal = document.querySelector("#close_edit_profile_modal");
        button.innerHTML = `Loading...`;
        button.disabled = true;

        const formData = new FormData(edit_profile_form);

        const profileBase64 = document.querySelector("#hidden_profile_base64").value;
        if (profileBase64) {
            formData.append("profile_base64", profileBase64);
        }

        console.log("FormData before submission:", [...formData.entries()]);

        try {
            const response = await fetch("./save_edit_profile.php", {
                method: "POST",
                body: formData
            });

            const text = await response.text();
            console.log("Raw response:", text);

            let data;
            try {
                data = JSON.parse(text);
            } catch (jsonError) {
                console.log("Failed to parse JSON:", jsonError);
                console.log("Raw Response (possibly PHP error/warning):", text);
                button.textContent = "Save Changes";
                button.disabled = false;
                return;
            }

            console.log("PHP Response:", data);

            if (!data.success) {
                alert("There was an error saving your profile. Please try again.");
                button.textContent = "Save Changes";
                button.disabled = false;
                return;
            }

            const bio = document.querySelector("#new_bio");
            console.log(bio);
            const name = document.querySelector("#name");
            const profile_image = document.querySelector("#profile_image");

            // Update the bio and name
            bio.textContent = data.bio; // Use textContent to avoid HTML injection
            name.textContent = data.name;

            // Set profile image based on base64 or URL
            if (data.profile_photo_url) {
                profile_image.src = data.profile_photo_url;
            }
            close_edit_profile_modal.click();

            console.log("User name, bio, and profile image updated successfully");

        } catch (error) {
            console.log("Network error or server issue:", error);
            alert("An error occurred while submitting the form. Please try again.");
        }

        button.textContent = "Save Changes";
        button.disabled = false;
    });










}
export default listener;


// const close_edit_profile_modal = document.querySelector("#close_edit_profile_modal");
// close_edit_profile_modal.click();