const showToast = (message, type = "info",icon) => {
    const app = document.querySelector("#app") || document.body;

    const toast = document.createElement("div");
    toast.className = " fixed mx-auto bg-transparent rounded fixed top-3 flex items-center justify-center max-w-xs p-4 text-gray-500 rounded-lg shadow-lg  transition-opacity duration-300 z-50"
    toast.role = "alert";

    const iconColor = type === "success" ? "text-green-500 bg-green-100 dark:bg-green-800 dark:text-green-200" :
        type === "error" ? "text-red-500 bg-red-100 dark:bg-red-800 dark:text-red-200" :
            "text-blue-500 bg-blue-100 dark:bg-blue-800 dark:text-blue-200"; // Default: Info

    toast.innerHTML =`
                        <div class="flex bg-white mx-auto px-4 py-2 border border-neutral-200 rounded items-center justify-center">
    <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            ${icon}
        <span class="sr-only">Check icon</span>
    </div>
                    <div class="text-sm font-normal">${message}</div>
                </div>`
    ;

    app.prepend(toast);

    // Smooth fade-in
    setTimeout(() => toast.classList.add("opacity-100"), 100);

    // Auto-remove after 4 seconds
    setTimeout(() => {
        toast.classList.remove("opacity-100");
        setTimeout(() => toast.remove(), 300);
    }, 3000);
};

export default showToast;