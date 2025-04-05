<?php

if ($student_id) {

?>

    <header class="h-16 blur-me border-neutral-300 border-b bg-white px-6 max-sm:fixed z-20 max-sm:inset-x-0 max-sm:top-0 max-sm:w-full sm:px-8 flex item-end">
        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex bg-white items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 z-0">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>
        <div class="ml-auto flex items-center bg-white z-20 gap-8 h-full">

            <button id="openModal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>

            <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" type="button" class="relative border border-neutral-300 flex size-9 shrink-0 overflow-hidden rounded-full max-sm:size-8 outline-none" aria-label="User Avatar" id="radix-:Re6fhhclfja:" aria-haspopup="menu" aria-expanded="false" data-state="closed">
            <img src="<?=$student_data['profile_photo'] ?>" alt="">
            </button>
            <div id="dropdownAvatar" class="z-10 hidden bg-white divide-y border border-neutral-300 divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                    <li>
                        <a href="./student_profile.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                    </li>
                </ul>
                <div class="py-2">
                    <a href="./clean_session.php" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 text-red-600">Sign out</a>
                </div>
            </div>
        </div>
    </header>

<?php

} else {

?>

    <header class="h-16 blur-me border-neutral-300 border-b bg-white px-6 max-sm:fixed z-20 max-sm:inset-x-0 max-sm:top-0 max-sm:w-full sm:px-8 flex item-end">
        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex bg-white items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 z-0">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>
        <div class="ml-auto flex items-center gap-4">
            <a href="./signin.php" class="flex items-center gap-2 justify-center font-bold transition active:scale-95 focus:outline-none disabled:cursor-not-allowed px-4 py-3 text-sm border bg-neutral-50 text-neutral-800 border-neutral-600 hover:bg-neutral-200 disabled:border-neutral-300 disabled:text-neutral-400 h-8 rounded-md sm:h-9 sm:rounded-lg">
                Sign in
            </a>
            <a href="./signup.php" class="hidden bg-neutral-300 hover:bg-white hover:border border border-transparent hover:border-neutral-300 sm:flex items-center gap-2 justify-center font-bold transition active:scale-95 focus:outline-none disabled:cursor-not-allowed px-4 py-3 text-sm bg-primary text-neutral-800 hover:bg-primary-400 disabled:bg-neutral-300 h-8 rounded-md sm:h-9 sm:rounded-lg">
                Sign up
            </a>
        </div>

    </header>

<?php

}

?>