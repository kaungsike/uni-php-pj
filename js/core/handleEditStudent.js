import { cancle_edit_student_btn, delete_student_btn, edit_student_btn, save_edit_student_btn } from "./selectors.js";
import showToast from "./toaste.js";

const handleEditStudent = () => {
    let currentEditingStudentId = null;

    // Edit button logic
    edit_student_btn && edit_student_btn.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            const student_id = e.target.getAttribute("student_id");

            // If there is already a student being edited, cancel the editing mode
            if (currentEditingStudentId && currentEditingStudentId !== student_id) {
                cancelEditMode(currentEditingStudentId);
            }

            toggleEditMode(student_id);

            currentEditingStudentId = student_id;
        });
    });

    // Cancel edit button logic
    cancle_edit_student_btn && cancle_edit_student_btn.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            const student_id = e.target.getAttribute("student_id");
            const form = document.querySelector(`.edit_form[student_id='${student_id}']`);
            form.reset();
            cancelEditMode(student_id);
        });
    });

    // Save edit button logic
    save_edit_student_btn && save_edit_student_btn.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            const student_id = e.target.getAttribute("student_id");
            const form = document.querySelector(`.edit_form[student_id='${student_id}']`);
            const cancel_btn = document.querySelector(`.cancle_edit_student_btn[student_id='${student_id}']`);
            const button = e.target;

            // Add the form submission listener only once
            if (!form.hasAttribute('data-submitted')) {
                form.setAttribute('data-submitted', 'true'); // Mark this form as having the listener attached

                form.addEventListener("submit", async (e) => {
                    e.preventDefault();

                    const formData = new FormData(form);
                    const id = formData.get("id");
                    const name = formData.get("name");
                    const studentId = formData.get("studentId");
                    const email = formData.get("email");

                    console.log(id, name, studentId, email);

                    button.disabled = true;
                    cancel_btn.disabled = true;

                    button.innerHTML = `<div class="inline-block h-5 w-5 animate-spin rounded-full border-4 border-solid border-current border-e-transparent align-[-0.125em] text-surface motion-reduce:animate-[spin_1.5s_linear_infinite] dark:text-white" role="status">
                        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
                    </div>`;

                    try {
                        // Send the FormData to the server
                        const response = await fetch("./save_edit_student.php", {
                            method: "POST",
                            body: formData
                        });

                        const text = await response.text();
                        console.log("Raw response:", text);

                        const data = JSON.parse(text);
                        console.log("PHP Response:", data);

                        if (data.success) {
                            button.textContent = `Saved`;
                            button.disabled = false;
                        } else {
                            button.textContent = "Error! Try again";
                            button.disabled = false;
                        }

                    } catch (error) {
                        console.error("Error:", error);
                        button.textContent = "Error!";
                        button.disabled = false;
                    }

                    const icon = `        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
        </svg>`

                    showToast("Student updated successfully", "success", icon);

                    button.innerHTML = `Save`;
                    updateStudentDetails(student_id, name, studentId, email);
                    cancel_btn.disabled = false;
                    button.disabled = false;

                    cancel_btn.click();
                    form.reset();
                });
            }
        });
    });

    const cancelEditMode = (student_id) => {
        const org_name = document.querySelector(`.org_name[student_id='${student_id}']`);
        const org_studentId = document.querySelector(`.org_studentId[student_id='${student_id}']`);
        const org_email = document.querySelector(`.org_email[student_id='${student_id}']`);

        const edit_name = document.querySelector(`.edit_name[student_id='${student_id}']`);
        const edit_studentId = document.querySelector(`.edit_studentId[student_id='${student_id}']`);
        const edit_email = document.querySelector(`.edit_email[student_id='${student_id}']`);

        const edit_btn_group = document.querySelector(`.edit_btn_group[student_id='${student_id}']`);
        const save_btn_group = document.querySelector(`.save_btn_group[student_id='${student_id}']`);

        org_name.classList.remove("hidden");
        org_studentId.classList.remove("hidden");
        org_email.classList.remove("hidden");

        edit_name.classList.add("hidden");
        edit_studentId.classList.add("hidden");
        edit_email.classList.add("hidden");

        edit_btn_group.classList.remove("hidden");
        save_btn_group.classList.add("hidden");
    }

    const toggleEditMode = (student_id) => {
        const org_name = document.querySelector(`.org_name[student_id='${student_id}']`);
        const org_studentId = document.querySelector(`.org_studentId[student_id='${student_id}']`);
        const org_email = document.querySelector(`.org_email[student_id='${student_id}']`);

        const edit_name = document.querySelector(`.edit_name[student_id='${student_id}']`);
        const edit_studentId = document.querySelector(`.edit_studentId[student_id='${student_id}']`);
        const edit_email = document.querySelector(`.edit_email[student_id='${student_id}']`);

        const edit_btn_group = document.querySelector(`.edit_btn_group[student_id='${student_id}']`);
        const save_btn_group = document.querySelector(`.save_btn_group[student_id='${student_id}']`);

        edit_name.value = org_name.innerHTML;
        edit_studentId.value = org_studentId.innerHTML;
        edit_email.value = org_email.innerHTML;

        org_name.classList.toggle("hidden");
        org_studentId.classList.toggle("hidden");
        org_email.classList.toggle("hidden");
        edit_name.classList.toggle("hidden");
        edit_studentId.classList.toggle("hidden");
        edit_email.classList.toggle("hidden");

        edit_btn_group.classList.toggle("hidden");
        save_btn_group.classList.toggle("hidden");

        edit_name.focus();
    }

    const updateStudentDetails = (student_id, name, studentId, email) => {
        const org_name = document.querySelector(`.org_name[student_id='${student_id}']`);
        const org_studentId = document.querySelector(`.org_studentId[student_id='${student_id}']`);
        const org_email = document.querySelector(`.org_email[student_id='${student_id}']`);

        org_name.innerHTML = name;
        org_studentId.innerHTML = studentId;
        org_email.innerHTML = email;
    }

    delete_student_btn && delete_student_btn.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            const student_id = e.target.getAttribute("student_id");
            const delete_student_confirm_btn = document.querySelector("#delete_student_confirm_btn");
            const close_delete_student_modal_btn = document.querySelector("#close_delete_student_modal_btn");
            const student_row = document.querySelector(`.student_row[student_id='${student_id}']`)

            // Replace old click handler (remove all previous ones)
            const newBtn = delete_student_confirm_btn.cloneNode(true);
            delete_student_confirm_btn.parentNode.replaceChild(newBtn, delete_student_confirm_btn);

            newBtn.setAttribute("student_id", student_id);

            newBtn.addEventListener("click", async (e) => {
                const id = e.target.getAttribute("student_id");
                const button = e.target;

                button.disabled = true;
                button.innerHTML = `<div class="inline-block h-5 w-5 animate-spin rounded-full border-4 border-solid border-current border-e-transparent align-[-0.125em] text-surface motion-reduce:animate-[spin_1.5s_linear_infinite] dark:text-white" role="status">
                    <span class="sr-only">Loading...</span>
                </div>`;

                try {
                    const response = await fetch("./save_delete_student.php", {
                        method: "POST",
                        headers: { "Content-Type": "application/x-www-form-urlencoded" }, // change this line for PHP to read $_POST
                        body: `id=${encodeURIComponent(id)}`
                    });

                    const text = await response.text();
                    const data = JSON.parse(text);
                    console.log("PHP Response:", data);

                    if (data.success) {
                        const row = document.querySelector(`[data-student-row-id="${id}"]`);
                        if (row) row.remove();
                    } else {
                        // showToast(data.message || "Error! Try again", "error");
                    }

                } catch (error) {
                    console.error("Error:", error);
                    // showToast("Network error", "error");
                }


                const icon = ` <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>`

                showToast("Student deleted successfully", "success", icon);


                button.innerHTML = `Delete`;
                button.disabled = false;
                student_row.remove();
                close_delete_student_modal_btn.click();
            });
        });
    });

}

export default handleEditStudent;
