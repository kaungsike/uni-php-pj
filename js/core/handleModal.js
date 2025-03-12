import { blurElements, close_edit_profile_modal, closeModal_btn, edit_profile_modal, modal, open_edit_profile_modal, openModal_btn } from "./selectors.js";

const handleModal = () => {

  openModal_btn && openModal_btn.addEventListener("click", () => {
    modal.classList.remove("hidden");

    blurElements.forEach((el) => {
      el.classList.add("backdrop-blur");
    })

  })

  closeModal_btn && closeModal_btn.addEventListener("click", () => {
    modal.classList.add("hidden");

    blurElements.forEach((el) => {
      el.classList.remove("backdrop-blur");
    })

  })

  window.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.classList.add("hidden");

      blurElements.forEach((el) => {
        el.classList.remove("backdrop-blur");
      });
    }

    if (e.target === edit_profile_modal) {
      edit_profile_modal.classList.add("hidden");

      blurElements.forEach((el) => {
        el.classList.remove("backdrop-blur");
      });
    }
  });



  // edit profile modal
  open_edit_profile_modal && open_edit_profile_modal.addEventListener(("click"), () => {
    console.log("clcik");
    edit_profile_modal.classList.remove("hidden");

    blurElements.forEach((el) => {
      el.classList.add("backdrop-blur");
    })

  })

  close_edit_profile_modal && close_edit_profile_modal.addEventListener(("click"), () => {

    edit_profile_modal.classList.add("hidden");
    blurElements.forEach((el) => {
      el.classList.remove("backdrop-blur");
    })

  })



}


export default handleModal;