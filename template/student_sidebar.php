<aside id="default-sidebar" class="blur-me fixed border-r bg-white border-neutral-400 top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="flex w-full items-center justify-end p-3">
        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="justify-center w-[40px] h-[40px] border border-neutral-300 rounded-full inline-flex items-center p text-sm text-gray-500 sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>

        </button>
    </div>
    <div class="blur-me h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <div class="flex w-full items-center justify-between px-3 pt-4 pb-4">
                    <a aria-label="Back to home" href="/home">
                        <p class="text-2xl font-bold"> Feed It</p>
                    </a>
                </div>
            </li>
            <li>
                <a href="./explore.php">
                    <div data-active="false" class="flex cursor-pointer items-center gap-1 rounded-lg border border-transparent px-3 py-1 text-neutral-600 text-sm leading-[150%] transition-all duration-300 hover:border-neutral-200 hover:bg-neutral-100 data-[active=true]:bg-neutral-100 data-[active=true]:font-extrabold data-[active=true]:text-primary-neutral" style="padding-left:8px">
                        <span class="relative h-6 w-6 flex-shrink-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                        </span>
                        <span class="whitespace-nowrap">Explore</span>
                    </div>
                </a>
            </li>
            <!-- <li>
                <a href="./dashboard.php">
                    <div data-active="false" class="flex cursor-pointer items-center gap-1 rounded-lg border border-transparent px-3 py-1 text-neutral-600 text-sm leading-[150%] transition-all duration-300 hover:border-neutral-200 hover:bg-neutral-100 data-[active=true]:bg-neutral-100 data-[active=true]:font-extrabold data-[active=true]:text-primary-neutral" style="padding-left:8px">
                        <span class="relative h-6 w-6 flex-shrink-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                            </svg>
                        </span>
                        <span class="whitespace-nowrap">Faculty</span>
                    </div>
                </a>
            </li> -->
            <li>
                <button type="button" class="flex cursor-pointer w-full items-center gap-1 rounded-lg border border-transparent px-1.5 py-1 text-neutral-600 text-sm leading-[150%] transition-all duration-300 hover:border-neutral-200 hover:bg-neutral-100 data-[active=true]:bg-neutral-100 data-[active=true]:font-extrabold data-[active=true]:text-primary-neutral" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>


                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Account</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>

                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="./student_profile.php" class="flex items-center gap-2 w-full px-2 py-1 text-sm text-neutral-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>

                            Profile</a>
                    </li>
                    <li>
                        <a href="./student_profile_posts.php" class="flex items-center w-full gap-2 px-2 py-1 text-sm text-neutral-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>

                            Yours Posts</a>
                    </li>
                    <li>
                        <a href="./student_profile_likes.php" class="flex items-center w-full gap-2 px-2 py-1 text-sm text-neutral-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>

                            Likes</a>
                    </li>
                    <li>
                        <a href="./signin.php" class="flex items-center w-full px-2 py-1 text-sm gap-2 text-red-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                            </svg>

                            Sign Out</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>