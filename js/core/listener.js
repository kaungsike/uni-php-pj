// import toastify from "toastify-js.";
import {
  approve_btn,
  cancle_edit_report_btn,
  closeModal_btn,
  comment_btn,
  comment_reply_btn,
  default_profiles_images,
  dropzone_file,
  edit_profile_form,
  edit_report_btn,
  edit_student_profile_form,
  input_new_profile,
  monitor_new_feedback_form,
  more_image_btn,
  refuse_btn,
  save_report_btn_,
  signin_form,
  signup_form,
  student_new_feedback_form,
  view_reply_btn,
} from "./selectors.js";
import showToast from "./toaste.js";

const listener = () => {
  approve_btn.forEach((btn) => {
    btn.addEventListener("click", async (e) => {
      const post_id = e.target.getAttribute("post_id");
      const button = e.target;
      const post_container = document.querySelector(
        `li.post_container[post_id='${post_id}']`
      );

      console.log(post_container);

      if (!post_id) {
        console.error("Error: Missing post_id");
        return;
      }

      button.innerHTML = `<div
                            class="inline-block h-5 w-5 animate-spin rounded-full border-4 border-solid border-current border-e-transparent align-[-0.125em] text-surface motion-reduce:animate-[spin_1.5s_linear_infinite] dark:text-white"
                            role="status">
                            <span
                                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
                        </div>`;
      button.disabled = true;

      try {
        const response = await fetch("./monitor_approve_post.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ post_id: post_id }),
        });

        const data = await response.json(); // Expecting JSON

        console.log("PHP Response:", data);

        if (data.success) {
          button.textContent = "Approved";
          button.disabled = true;
          post_container.remove();
          const icon = ` <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>`;

          showToast("Approved successfully", "success", icon);
        } else {
          button.textContent = "Error!";
          button.disabled = false;
        }
      } catch (error) {
        button.textContent = "Error! Try again";
        button.disabled = false;
      }
    });
  });

  refuse_btn.forEach((btn) => {
    btn.addEventListener("click", async (e) => {
      const post_id = e.target.getAttribute("post_id");
      const button = e.target;
      const post_container = document.querySelector(
        `li.post_container[post_id='${post_id}']`
      );
      console.log(e.target);

      if (!post_id) {
        console.error("Error: Missing post_id");
        return;
      }

      console.log("Refusing post_id:", post_id);

      button.innerHTML = `<div
                            class="inline-block h-5 w-5 animate-spin rounded-full border-4 border-solid border-current border-e-transparent align-[-0.125em] text-surface motion-reduce:animate-[spin_1.5s_linear_infinite] dark:text-white"
                            role="status">
                            <span
                                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
                        </div>`;
      button.disabled = true;

      try {
        const response = await fetch("./monitor_refuse_post.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ post_id: post_id }),
        });

        const data = await response.json(); // Expecting JSON

        console.log("PHP Response:", data);

        if (data.success) {
          button.textContent = "Refused";
          post_container.remove();
          const icon = ` <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>`;

          showToast("Refused successfully", "success", icon);
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

      button.innerHTML = `<div
                            class="inline-block h-6 w-6 animate-spin rounded-full border-4 border-solid border-current border-e-transparent align-[-0.125em] text-surface motion-reduce:animate-[spin_1.5s_linear_infinite] dark:text-white"
                            role="status">
                            <span
                                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
                        </div>`;
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

  if (signup_form) {
    signup_form.addEventListener("submit", async (e) => {
      e.preventDefault();

      const button = e.target.querySelector("#signup_btn");

      button.innerHTML = `<div
                            class="inline-block h-6 w-6 animate-spin rounded-full border-4 border-solid border-current border-e-transparent align-[-0.125em] text-surface motion-reduce:animate-[spin_1.5s_linear_infinite] dark:text-white"
                            role="status">
                            <span
                                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
                        </div>`;
      button.disabled = true;

      const formData = new FormData(signup_form);
      const name = formData.get("name");
      const email = formData.get("email");
      const password = formData.get("password");
      const year = formData.get("year");
      const major = formData.get("major");
      const id = formData.get("id");

      try {
        const response = await fetch("./save_signup.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ name, email, password, year, major, id }),
        });

        const text = await response.text();
        try {
          const data = JSON.parse(text);
          console.log("PHP Response:", data);

          if (data.success) {
            alert("Account created successfully!");
            location.href = "./signin.php"; // Redirect to sign-in page
          } else {
            alert(data.message);
          }
        } catch (jsonError) {
          console.error("Invalid JSON Response:", text);
          alert("Server error: Response is not valid JSON.");
        }
      } catch (error) {
        console.error("Fetch failed:", error);
        alert("Network error. Please try again.");
      }

      signup_form.reset();
      button.textContent = "Sign Up";
      button.disabled = false;
    });

    signup_form.reset();
  }

  monitor_new_feedback_form &&
    monitor_new_feedback_form.addEventListener("submit", async (e) => {
      e.preventDefault();
      console.log("submit");

      const button = e.target.querySelector("#monitor_new_feedback_btn");
      const image_container = document.querySelector(".post_images_container");
      const images = image_container.querySelectorAll("img");
      const there_is_no_image =
        image_container.querySelector(".there_is_no_image");

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
          const file = new File([imageBlob], fileName, {
            type: imageBlob.type,
          });

          // Append the file to the FormData
          formData.append("images[]", file);
        } catch (error) {
          console.error("Error processing image:", error);
        }
      }

      console.log([...formData.entries()]);

      // Update button state

      button.innerHTML = `<div
        class="inline-block h-5 w-5 animate-spin rounded-full border-4 border-solid border-current border-e-transparent align-[-0.125em] text-surface motion-reduce:animate-[spin_1.5s_linear_infinite] dark:text-white"
        role="status">
        <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
    </div>`;
      button.disabled = true;

      try {
        // Send the FormData to the server
        const response = await fetch("./save_monitor_newfeedback.php", {
          method: "POST",
          body: formData,
        });

        const text = await response.text();
        console.log("Raw response:", text);

        const data = JSON.parse(text);
        console.log("PHP Response:", data);

        if (data.success) {
          button.textContent = `Posted`;
          button.disabled = false;
          closeModal_btn.click();
          const icon = ` <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>`;

          showToast("Approved successfully", "success", icon);
        } else {
          button.textContent = "Error! Try again";
          button.disabled = false;
        }

        image_container.innerHTML = "";
        image_container.append(there_is_no_image);
      } catch (error) {
        console.error("Try fail..", error);
        button.textContent = "Error!";
        button.disabled = false;
      }

      monitor_new_feedback_form.reset();
    });

  student_new_feedback_form &&
    student_new_feedback_form.addEventListener("submit", async (e) => {
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
          const file = new File([imageBlob], fileName, {
            type: imageBlob.type,
          });

          // Append the file to the FormData
          formData.append("images[]", file);
        } catch (error) {
          console.error("Error processing image:", error);
        }
      }

      console.log([...formData.entries()]);

      // Update button state

      button.innerHTML = `<div
        class="inline-block h-5 w-5 animate-spin rounded-full border-4 border-solid border-current border-e-transparent align-[-0.125em] text-surface motion-reduce:animate-[spin_1.5s_linear_infinite] dark:text-white"
        role="status">
        <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
    </div>`;
      button.disabled = true;

      try {
        // Send the FormData to the server
        const response = await fetch("./save_student_newfeedback.php", {
          method: "POST",
          body: formData,
        });

        const text = await response.text();
        console.log("Raw response:", text);

        const data = JSON.parse(text);
        console.log("PHP Response:", data);

        if (data.success) {
          button.textContent = `Posted`;
          button.disabled = false;
          closeModal_btn.click();
          const icon = ` <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
      </svg>`;

          showToast("Feedback Created successfully", "success", icon);
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

  comment_btn &&
    comment_btn.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        const current_post_id = e.target.getAttribute("post_id");

        const post_comment_box = document.querySelector(
          `[post_comment_box_id="${current_post_id}"]`
        );

        post_comment_box.classList.toggle("hidden");
        post_comment_box.classList.toggle("p-0");

        return;
      });
    });

  view_reply_btn &&
    view_reply_btn.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        const parent_id = e.target.getAttribute("parent_id");
        const reply_container = e.target.nextElementSibling;

        e.target.innerText = "";
        reply_container.classList.remove("hidden");
      });
    });

  comment_reply_btn.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const post_id = e.target.getAttribute("post_id");

      const commentBox = e.target.closest(".comment_box");
      const parent_id = commentBox
        .querySelector(".name")
        .getAttribute("comment_id");
      const name = commentBox.querySelector(".name").innerText;
      const comment_form = document.querySelector(
        `.comment_form[post_id='${post_id}']`
      );
      const comment_form_input = comment_form.querySelector("#input_comment");
      const closeBtn = document.querySelector(
        `.close_reply_mention_box_btn[post_id='${post_id}']`
      );
      const replyMentionBox = document.querySelector(
        `.reply_mention_box[post_id='${post_id}']`
      );

      replyMentionBox.classList.remove("hidden");
      replyMentionBox.querySelector(".reply_to").innerHTML = "Reply to ";
      comment_form_input.focus();
      replyMentionBox.querySelector("input").value = "";
      replyMentionBox.querySelector("input").value = " " + name;
      replyMentionBox.querySelector("input").setAttribute("parent_id", "");
      replyMentionBox
        .querySelector("input")
        .setAttribute("parent_id", parent_id);

      console.log(parent_id);

      closeBtn.addEventListener("click", () => {
        replyMentionBox.classList.add("hidden");
      });
    });
  });

  more_image_btn &&
    more_image_btn.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        const target = e.target;
        const post_container = target.closest(".post_container");
        const images = post_container.querySelectorAll("img");

        console.log(post_container);

        post_container.innerHTML = "";
        images.forEach((image) => {
          image.classList.remove("hidden");
          post_container.append(image);

          console.log(image);
        });

        target.remove();
      });
    });

  dropzone_file &&
    dropzone_file.addEventListener("change", (e) => {
      const files = Array.from(e.target.files);
      const container = document.querySelector(".post_images_container");

      if (files.length > 0) {
        files.forEach((file) => {
          const reader = new FileReader();

          reader.onload = function (e) {
            const wrapper = document.createElement("div");
            wrapper.classList.add(
              "relative",
              "h-full",
              "w-auto",
              "flex",
              "items-center",
              "justify-center"
            );

            const img = document.createElement("img");
            img.src = e.target.result;
            img.classList.add(
              "h-full",
              "rounded-lg",
              "object-cover",
              "border",
              "border-neutral-300"
            );

            const deleteButton = document.createElement("button");
            deleteButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="pointer-events-none size-5">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
</svg>
`;
            deleteButton.classList.add(
              "absolute",
              "right-[5px]",
              "top-0",
              "w-[15px]",
              "h-[15px]",
              "bg-white",
              "text-red-500",
              "rounded-full",
              "flex",
              "items-center",
              "justify-center",
              "shadow-md",
              "hover:bg-gray-200",
              "cursor-pointer"
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

    const close_edit_profile_modal = document.querySelector(
      "#close_edit_profile_modal"
    );
    button.innerHTML = "";

    button.innerHTML = `<div
        class="inline-block h-5 w-5 animate-spin rounded-full border-4 border-solid border-current border-e-transparent align-[-0.125em] text-surface motion-reduce:animate-[spin_1.5s_linear_infinite] dark:text-white"
        role="status">
        <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
        </div>`;
    button.disabled = true;

    const formData = new FormData(edit_profile_form);

    const profileBase64 = document.querySelector(
      "#hidden_profile_base64"
    ).value;
    if (profileBase64) {
      formData.append("profile_base64", profileBase64);
    }

    console.log("FormData before submission:", [...formData.entries()]);

    try {
      const response = await fetch("./save_edit_profile.php", {
        method: "POST",
        body: formData,
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
      bio.textContent = data.bio;
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

    const icon = `<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
    </svg>`;

    showToast("Profile updated successfully!", "success", icon);

    button.textContent = "Save Changes";
    button.disabled = false;
  });

  edit_student_profile_form && edit_student_profile_form.addEventListener("submit", async (e) => {
    e.preventDefault();
    console.log("Submitting...");

    const button = e.target.querySelector("#edit_profile_btn");

    const close_edit_profile_modal = document.querySelector(
      "#close_edit_profile_modal"
    );
    button.innerHTML = "";

    button.innerHTML = `<div
        class="inline-block h-5 w-5 animate-spin rounded-full border-4 border-solid border-current border-e-transparent align-[-0.125em] text-surface motion-reduce:animate-[spin_1.5s_linear_infinite] dark:text-white"
        role="status">
        <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
    </div>`;
    button.disabled = true;

    const formData = new FormData(edit_student_profile_form);

    const profileBase64 = document.querySelector(
      "#hidden_profile_base64"
    ).value;
    if (profileBase64) {
      formData.append("profile_base64", profileBase64);
    }

    console.log("FormData before submission:", [...formData.entries()]);

    try {
      const response = await fetch("./save_edit_student_profile.php", {
        method: "POST",
        body: formData,
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
      bio.textContent = data.bio;
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

    const icon = `<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>`;

    showToast("Profile updated successfully!", "success", icon);
    button.textContent = "Save Changes";
    button.disabled = false;
  });

  edit_report_btn && edit_report_btn.addEventListener("click", (e) => {

    const button = e.target;

    const cancle_edit_report_btn = document.querySelector("#cancle_edit_report_btn");
    const print_report_btn = document.querySelector("#print_report_btn");
    const save_report_btn = document.querySelector("#save_report_btn_");

    const report_title = document.querySelector("#report_title");
    const report_content = document.querySelector("#report_content");
    const report_date = document.querySelector("#report_date");

    const report_title_input = document.querySelector("#report_title_input");
    const report_content_input = document.querySelector("#report_content_input");
    const report_date_input = document.querySelector("#report_date_input");


    console.log(report_title);
    console.log(report_content);

    report_title.classList.add("hidden");
    report_content.classList.add("hidden");
    report_date.classList.add("hidden");
    report_title_input.classList.remove("hidden");
    report_content_input.classList.remove("hidden");
    report_date_input.classList.remove("hidden");
    report_title_input.focus();

    button.classList.add("hidden");
    print_report_btn.classList.add("hidden");

    cancle_edit_report_btn.classList.remove("hidden");
    save_report_btn.classList.remove("hidden");
  })

  cancle_edit_report_btn && cancle_edit_report_btn.addEventListener("click", (e) => {

    const button = e.target;

    const edit_report_btn = document.querySelector("#edit_report_btn");
    const print_report_btn = document.querySelector("#print_report_btn");
    const save_report_btn = document.querySelector("#save_report_btn_");

    const report_title = document.querySelector("#report_title");
    const report_content = document.querySelector("#report_content");
    const report_date = document.querySelector("#report_date");

    const report_title_input = document.querySelector("#report_title_input");
    const report_content_input = document.querySelector("#report_content_input");
    const report_date_input = document.querySelector("#report_date_input");


    console.log(report_title);
    console.log(report_content);

    report_title.classList.remove("hidden");
    report_content.classList.remove("hidden");
    report_date.classList.remove("hidden");
    report_title_input.classList.add("hidden");
    report_content_input.classList.add("hidden");
    report_date_input.classList.add("hidden");
    // report_title_input.focus();

    button.classList.add("hidden");
    save_report_btn.classList.add("hidden");

    print_report_btn.classList.remove("hidden");
    edit_report_btn.classList.remove("hidden");

  })

  save_report_btn_ && save_report_btn_.addEventListener("click",  (e) => {
    const button = e.target;

    console.log("u click");

    const edit_report_btn = document.querySelector("#edit_report_btn");
    const print_report_btn = document.querySelector("#print_report_btn");
    const cancle_edit_report_btn = document.querySelector("#cancle_edit_report_btn");

    const report_title = document.querySelector("#report_title");
    const report_content = document.querySelector("#report_content");
    const report_date = document.querySelector("#report_date");

    const report_title_input = document.querySelector("#report_title_input");
    const report_content_input = document.querySelector("#report_content_input");
    const report_date_input = document.querySelector("#report_date_input");


    console.log(report_title);
    console.log(report_content);

    report_title.innerText = report_title_input.value;
    report_content.innerText = report_content_input.value;
    report_date.innerText = report_date_input.value;

    report_title.classList.remove("hidden");
    report_content.classList.remove("hidden");
    report_date.classList.remove("hidden");
    report_title_input.classList.add("hidden");
    report_content_input.classList.add("hidden");
    report_date_input.classList.add("hidden");
    // report_title_input.focus();

    button.classList.add("hidden");
    cancle_edit_report_btn.classList.add("hidden");

    print_report_btn.classList.remove("hidden");
    edit_report_btn.classList.remove("hidden");
  })


};
export default listener;
