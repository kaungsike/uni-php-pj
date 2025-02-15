<?php include("./template/header.php") ?>

<div class="w-full h-full">

    <?php include("./template/sidebar.php") ?>

    <div class="sm:ml-64">

        <?php include("./template/nav.php") ?>

        <!-- pullout the data from sql -->

        <main class="w-full min-h-screen flex-1 overflow-y-auto scroll-smooth max-sm:mt-16 pt-0">

            <div class="p-5 mb-4 mx-auto border-y-0 min-h-screen border xl:w-[900px]">
                <time class="text-lg font-semibold text-gray-900 dark:text-white">January 13th, 2022</time>
                <ol class="mt-3 divide-y divide-gray-200 dark:divide-gray-700">
                    <?php
                    $sql = "SELECT * FROM posts WHERE status = 'approved'";
                    $query = mysqli_query($con, $sql);

                    $anonymous_picture_sql = "SELECT * FROM `anonymous_profiles`";
                    $anonymous_picture_query = mysqli_query($con, $anonymous_picture_sql);
                    $anonymous_picture_array = mysqli_fetch_assoc($anonymous_picture_query);
                    $anonymous_picture = $anonymous_picture_array['image_path'];



                    while ($data = mysqli_fetch_assoc($query)) :
                    ?>
                        <li>
                            <div class="mb-7 border-b border-b-neutral-300">
                                <div class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <?php
                                    echo $data['is_anonymous']
                                        ? "<img class='w-12 border-0.5 border-neutral-300 h-12 mb-3 me-3 rounded-full sm:mb-0' src='$anonymous_picture' alt='User Image'>"
                                        : "<img class='w-12 h-12 mb-3 me-3 rounded-full sm:mb-0' src='https://flowbite.com/docs/images/people/profile-picture-5.jpg' alt='User Image'>";
                                    ?>

                                    <div>
                                        <p class="font-bold text-lg"><?php
                                                                        if ($data['is_anonymous']) {
                                                                            echo "Anonymous";
                                                                        } else {
                                                                            echo "San Gyi Dr Pr"; // You can replace this with the actual name field, e.g., $data['name']
                                                                        }
                                                                        ?></p>

                                        </p>
                                    </div>
                                </div>
                                <div class="pl-[70px]">
                                    <p><?= nl2br(htmlspecialchars($data['content'] ?? '')) ?></p>
                                    <div class="w-full h-[40px] mt-5 flex items-center justify-between">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                                            </svg>
                                        </button>
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ol>

            </div>

        </main>

    </div>

</div>

<?php include("./template/footer.php") ?>