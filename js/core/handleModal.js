import { blurElements, closeModal_btn, modal, monitor_like_btn_group, openModal_btn } from "./selectors.js";

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
  });

}

export default handleModal;