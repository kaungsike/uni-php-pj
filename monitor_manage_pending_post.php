<?php include("./template/monitor_header.php") ?>

<div class="w-full h-full">

    <?php include("./template/monitor_sidebar.php") ?>

    <div class="sm:ml-64">

        <?php include("./template/monitor_nav.php") ?>

        <main class="w-full min-h-screen flex-1 overflow-y-auto scroll-smooth max-sm:mt-16 pt-0">

            <div class="w-full">
                <div class="flex mx-auto items-center xl:w-[880px] mb-10 mt-5 rounded-3xl border border-neutral-200 bg-neutral-100 p-6 sm:gap-4">
                    <p class="text-2xl font-bold">Pending Posts Manage Panel</p>
                </div>

                <?php

                $pending_post_sql = "SELECT posts.*, users.name AS student_name, users.profile_photo as student_profile_photo FROM posts INNER JOIN users ON posts.user_id = users.id WHERE posts.status = 'pending'";
                $pending_post_query = mysqli_query($con, $pending_post_sql);

                ?>

                <div class="mx-auto xl:w-[880px] border border-neutral-300 rounded-lg p-4">
                    <ol id="post_group" class="mt-3 divide-y divide-gray-200 dark:divide-gray-700">
                        <?php while ($pending_post = mysqli_fetch_assoc($pending_post_query)) : ?>
                            <li>
                                <div class="mb-7 border-b border-b-neutral-300">
                                    <div class="items-center rounded-lg block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <?php
                                        if ($pending_post['is_anonymous']) {
                                        ?>
                                            <img class="w-12 h-12 mb-3 me-3 rounded-full sm:mb-0" src="https://cdn.vectorstock.com/i/500p/22/45/user-icon-profile-line-isolated-on-white-vector-50642245.jpg" alt="User Image">
                                        <?php
                                        } else {
                                        ?>
                                            <img class="w-12 h-12 mb-3 me-3 rounded-full sm:mb-0" src="<?= $pending_post['student_profile_photo'] ?>" alt="User Image">
                                        <?php
                                        }
                                        ?>
                                        <div class=" flex items-center justify-between w-full">
                                            <div>
                                                <p class="font-bold text-lg">
                                                    <?php
                                                    if ($pending_post['is_anonymous']=="1") {
                                                        echo "Anonymous";
                                                    } else {
                                                        echo $pending_post['student_name'];
                                                    }
                                                    ?>
                                                </p>

                                                <p class="text-sm text-neutral-500">12hrs ago</p>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <button id="refuse_btn" post_id='<?= $pending_post['id'] ?>' class="flex items-center gap-2 justify-center font-bold transition active:scale-95 focus:outline-none disabled:cursor-not-allowed px-4 py-3 text-sm border bg-neutral-50 border-neutral-600 hover:bg-neutral-200 disabled:border-neutral-300 disabled:text-neutral-400 h-8 rounded-md sm:h-9 sm:rounded-lg text-red-500">
                                                    Refuse
                                                </button>
                                                <button id="approve_btn" post_id='<?= $pending_post['id'] ?>' class="flex items-center gap-2 justify-center font-bold transition active:scale-95 focus:outline-none disabled:cursor-not-allowed px-4 py-3 text-sm border bg-neutral-50 text-green-700 border-neutral-600 hover:bg-neutral-200 disabled:border-neutral-300 disabled:text-neutral-400 h-8 rounded-md sm:h-9 sm:rounded-lg">
                                                    Approve
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:pl-[70px] mb-5">
                                        <?php
                                            $content = preg_replace('/\s{2,}/','<br>',$pending_post['content'])
                                        ?>
                                        <p><?=$content ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ol>
                </div>

            </div>

        </main>

    </div>

</div>

<?php include("./template/monitor_footer.php") ?>