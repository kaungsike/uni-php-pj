
</body>
<script type="module" src="./main.js"></script>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/script-name.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<!-- preline -->
<script src="https://cdn.jsdelivr.net/npm/preline@latest/dist/preline.min.js"></script>

<script>
    
function openImageModal(imageSrc) {
    document.getElementById('modalImage').src = imageSrc;
    document.getElementById('imageModal').classList.remove('hidden');
}

document.getElementById('closeModal') && document.getElementById('closeModal').addEventListener('click', function () {
    document.getElementById("imageModal") && document.getElementById('imageModal').classList.add('hidden');
});

document.getElementById('imageModal') && document.getElementById('imageModal').addEventListener('click', function (event) {
    if (event.target === this) {
        this.classList.add('hidden');
    }
});
</script>

</html>