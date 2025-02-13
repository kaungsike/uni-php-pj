<?php include("./template/newfeedback.php") ?>

<script>
  const openModalButton = document.getElementById("openModal");
  const closeModalButton = document.getElementById("closeModal");
  const modal = document.getElementById("modal");
  const blurElements = document.querySelectorAll(".blur-me");

  openModalButton.addEventListener("click", () => {
    modal.classList.remove("hidden");

    blurElements.forEach((el) => {
      el.classList.add("backdrop-blur");
    });
  });

  closeModalButton.addEventListener("click", () => {
    modal.classList.add("hidden");

    blurElements.forEach((el) => {
      el.classList.remove("backdrop-blur");
    });
  });

  window.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.classList.add("hidden");

      blurElements.forEach((el) => {
        el.classList.remove("backdrop-blur");
      });
    }
  });
</script>

</body>


<!-- <script src="./path/to/flowbite/dist/flowbite.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</html>