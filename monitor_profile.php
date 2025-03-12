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

        <main class="relative w-full flex pb-0 overflow-y-auto scroll-smooth pt-6 min-h-screen h-full items-stretch max-sm:mt-16 sm:pt-8">
            <div class="-mt-8 relative w-full space-y-8 items-center flex flex-col">
                <div class="relative h-[120px] xl:h-[155px] w-full sm:h-52">
                    <img alt="Profile Banner" loading="lazy" decoding="async" data-nimg="fill" class="w-full object-cover" src="https://images.unsplash.com/flagged/photo-1593005510329-8a4035a7238f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8eWVsbG93fGVufDB8fDB8fHww" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                </div>
                <div class=" absolute xl:top-[55px] top-0 2xl:flex 2xl:items-end 2xl:justify-start xl:flex xl:items-end flex xl:flex-row items-center justify-center flex-col xl:gap-6 px-10 xl:justify-start xl:w-[940px] w-full xl:h-[155px]">
                    <div class="overflow-hidden border-[4px] border-neutral-200 h-full w-[155px] flex items-center justify-center bg-white rounded-full">
                        <img id="profile_image" class="h-full bg-cover" src="<?= $user_data['profile_photo'] ?>" alt="">
                    </div>
                    <div class="flex flex-col">
                        <p id="name" class="xl:text-4xl text-2xl font-bold"><?= $monitor_data['name'] ?></p>
                        <p class="text-neutral-500"><?= $monitor_data['student_id'] ?></p>
                    </div>
                </div>
                <div class="p-5 mb-4 xl:mt-[32px] pt-[110px] xl:pt-[100px] mx-[5px] w-[95%]  xl:mx-auto border-y-0 flex-grow border xl:w-[900px]">
                    <div class="flex items-center xl:mb-5 justify-between sm:max-w-[1136px] sm:px-8">
                        <div class="">
                            <p>Joined <span><?=$user_data['created_at'] ?></span></p>
                        </div>
                        <button id="open_edit_profile_modal" class="inline-flex group active:scale-95 items-center gap-2 relative justify-center whitespace-nowrap font-bold duration-300 focus-visible:outline-none mt-0 h-[46px] px-4 py-3 text-sm rounded-xl border  text-neutral-800 border-neutral-600" type="button" data-color="neutral">
                            <span class="inline-flex items-center gap-2 whitespace-nowrap">
                                Edit Profile
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="pointer-events-none size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>

                            </span>
                        </button>

                    </div>
                    <div class="w-full border border-neutral-300 p-6 rounded-lg">
                    <?php if (empty(trim($user_data['bio']))) { ?>
    <p class="" id="new_bio">Tell as about your self something</p>
<?php } else { ?>
    <p id="new_bio"><?= htmlspecialchars(trim($user_data['bio'])) ?></p>
<?php } ?>





                    </div>
                </div>
            </div>
        </main>

    </div>


</div>


<?php include("./template/footer.php") ?>