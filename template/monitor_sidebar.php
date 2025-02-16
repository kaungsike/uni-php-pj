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
                    <a>
                        <p class="text-2xl font-bold">Manage Posts</p>
                    </a>
                </div>
            </li>
            <li>
                <a href="./monitor_manage_pending_post.php">
                    <div data-active="false" class="flex cursor-pointer items-center gap-1 rounded-lg border border-transparent px-3 py-1 text-neutral-600 text-sm leading-[150%] transition-all duration-300 hover:border-neutral-200 hover:bg-neutral-100 data-[active=true]:bg-neutral-100 data-[active=true]:font-extrabold data-[active=true]:text-primary-neutral" style="padding-left:8px">
                        <img src="./pending-icon.png" class="size-5 mr-1" alt="">

                        </span>
                        <span class="whitespace-nowrap">Pending Posts</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="./monitor_manage_approved_post.php">
                    <div data-active="false" class="flex cursor-pointer items-center gap-1 rounded-lg border border-transparent px-3 py-1 text-neutral-600 text-sm leading-[150%] transition-all duration-300 hover:border-neutral-200 hover:bg-neutral-100 data-[active=true]:bg-neutral-100 data-[active=true]:font-extrabold data-[active=true]:text-primary-neutral" style="padding-left:8px">
                        <span class="relative h-6 w-6 flex-shrink-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>


                        </span>
                        <span class="whitespace-nowrap">Approved Posts</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="./monitor_manage_rejected_post.php">
                    <div data-active="false" class="flex cursor-pointer items-center gap-1 rounded-lg border border-transparent px-3 py-1 text-neutral-600 text-sm leading-[150%] transition-all duration-300 hover:border-neutral-200 hover:bg-neutral-100 data-[active=true]:bg-neutral-100 data-[active=true]:font-extrabold data-[active=true]:text-primary-neutral" style="padding-left:8px">
                        <span class="relative h-6 w-6 flex-shrink-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>



                        </span>
                        <span class="whitespace-nowrap">Refused Posts</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</aside>