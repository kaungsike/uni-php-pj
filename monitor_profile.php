<?php include("./template/monitor_header.php") ?>

<?php


if (!isset($_SESSION['monitor_id'])) {
    header("Location: signin.php");
    exit();
}


if (!$monitor_id) {
    echo "<script>
        alert('Invalid user id.');
        location.href = './signin.php';
    </script>";
    exit;
}


if (!$monitor_data) {
    echo "<script>
        alert('User not found.');
        location.href = './signin.php';
    </script>";
    exit;
}


?>

<?php include("./template/monitor_header.php") ?>

<div class=" w-full h-full">

    <?php include("./template/monitor_sidebar.php") ?>

    <div class="sm:ml-64">

        <?php include("./template/monitor_nav.php") ?>

        <main class="relative w-full flex-1 overflow-y-auto scroll-smooth pt-6 pb-20 max-sm:mt-16 sm:pt-8 sm:pb-[7.5rem]">
            <div class="-mt-8 h-full relative w-full space-y-8 items-center flex flex-col">
                <div class="relative h-28 w-full sm:h-52">
                    <img alt="Profile Banner" loading="lazy" decoding="async" data-nimg="fill" class="w-full object-cover" src="https://www.hackquest.io/images/profile/default-background.png" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    <label class="absolute right-6 bottom-4 cursor-pointer rounded-full bg-neutral-black/60 p-1.5 text-neutral-white" data-state="closed">
                        <input accept="image/*" class="hidden" type="file">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="size-4 sm:size-[1.125rem]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                    </label>
                </div>
                <div class=" absolute xl:top-[105px] flex items-end gap-6 px-10 justify-start xl:w-[1045px] w-full xl:h-[155px]">
                    <div class="overflow-hidden border-[4px] border-neutral-200 h-full w-[155px] rounded-full">
                        <img src="https://i.pinimg.com/736x/58/7b/57/587b57f888b1cdcc0e895cbdcfde1c1e.jpg" alt="">
                    </div>
                    <div class="flex flex-col">
                        <p class="text-4xl font-bold"><?=$monitor_data['name'] ?></p>
                        <p class="text-neutral-500"><?=$monitor_data['student_id'] ?></p>
                    </div>
                </div>
                <div class="pb-16 sm:flex pt-[80px] xl:w-[1070px] sm:justify-center mx-auto">
                    <div class="flex-1 space-y-8 max-sm:px-6 sm:max-w-[1136px] sm:px-8">
                        <div class="space-y-6">
                            <h2 class="title-3">Resume</h2>
                            <div class="grid gap-5 sm:grid-cols-3">
                                <div class="flex w-full items-center">
                                    <div class="grid w-full overflow-hidden focus:outline-none">
                                        <div class="relative w-full cursor-pointer">
                                            <div class="outline-dashed outline-1 ease-in-out outline-neutral-white flex w-full items-center justify-center gap-2.5 rounded-xl border border-neutral-300 border-dashed p-4 transition-colors duration-300 hover:border-neutral-400" role="presentation" tabindex="0">
                                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-neutral-500" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="17 8 12 3 7 8"></polyline>
                                                    <line x1="12" x2="12" y1="3" y2="15"></line>
                                                </svg>
                                                <span class="body-s text-neutral-500">Upload file</span>
                                            </div>
                                            <input accept="application/pdf,.pdf" multiple="" tabindex="-1" class="outline-none" type="file" style="display: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-6">
                            <div class="flex items-center justify-between">
                                <h2 class="title-3">Experience</h2>
                            </div>
                            <button class="inline-flex group active:scale-95 items-center gap-2 relative justify-center whitespace-nowrap font-bold transition-all duration-300 focus-visible:outline-none disabled:cursor-not-allowed data-[loading=&quot;true&quot;]:pointer-events-none h-[46px] px-4 py-3 text-sm rounded-xl border bg-neutral-50 text-neutral-800 border-neutral-600 enabled:hover:bg-neutral-200 disabled:border-neutral-300 data-[loading=&quot;true&quot;]:bg-transparent disabled:text-neutral-400 data-[loading=&quot;true&quot;]:border-neutral-600" type="button" data-color="neutral" data-variant="outline">
                                <span class="inline-flex items-center gap-2 whitespace-nowrap">
                                    Add Experience
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="size-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h2 class="title-3">Projects</h2>
                            <a href="/hackathons">
                                <button class="inline-flex group active:scale-95 items-center gap-2 relative justify-center whitespace-nowrap font-bold transition-all duration-300 focus-visible:outline-none disabled:cursor-not-allowed data-[loading=&quot;true&quot;]:pointer-events-none h-[46px] px-4 py-3 text-sm rounded-xl border bg-neutral-50 text-neutral-800 border-neutral-600 enabled:hover:bg-neutral-200 disabled:border-neutral-300 data-[loading=&quot;true&quot;]:bg-transparent disabled:text-neutral-400 data-[loading=&quot;true&quot;]:border-neutral-600" type="button" data-color="neutral" data-variant="outline">
                                    <span class="inline-flex items-center gap-2 whitespace-nowrap">
                                        Join a Hackathon
                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="size-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- <div data-state="collapsed" class="group relative hidden border-l border-l-neutral-200 p-3 duration-300 data-[state=collapsed]:w-0 data-[state=expanded]:w-80 sm:flex sm:items-center">
                        <button type="button" class="-left-3 absolute top-[calc(50%-0.75rem)] inline-flex size-6 items-center justify-center rounded-full border border-neutral-200 bg-neutral-white text-neutral-200 outline-none">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="size-4 duration-200 group-data-[state=expanded]:rotate-180" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="m15 18-6-6 6-6"></path>
                            </svg>
                        </button>
                    </div> -->
                </div>
            </div>
        </main>

    </div>


</div>


<?php include("./template/footer.php") ?>