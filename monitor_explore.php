<?php include("./template/monitor_header.php") ?>

<div class="w-full h-full">

    <?php include("./template/monitor_sidebar.php") ?>

    <div class="sm:ml-64">

        <?php include("./template/monitor_nav.php") ?>

        <!-- pullout the data from sql -->

        <main class="w-full min-h-screen flex-1 overflow-y-auto scroll-smooth max-sm:mt-16 pt-0">

            <div class="p-5 mb-4 mx-auto border-y-0 min-h-screen border xl:w-[900px]">
                <time class="text-lg font-semibold text-gray-900 dark:text-white">January 13th, 2022</time>
                <ol class="mt-3 divide-y divide-gray-200 dark:divide-gray-700">
                    <?php
                    $sql = "SELECT posts.*, users.name AS user_name, users.profile_photo as user_profile_photo FROM posts INNER JOIN users ON posts.user_id = users.id WHERE posts.status = 'approved'";
                    $query = mysqli_query($con, $sql);

                    while ($data = mysqli_fetch_assoc($query)) :
                    ?>
                        <li>
                            <div class="mb-7 border-b border-b-neutral-300">
                                <div class="items-center mb-2 mt-2 sm:flex flex hover:bg-gray-100 gap-2 dark:hover:bg-gray-700">
                                    <?php

                                    if ($data['is_anonymous'] == "1") {
                                    ?>
                                        <img class="xl:w-12 w-10 border-0.5 border-neutral-300 h-12 rounded-full sm:mb-0" src="https://cdn.vectorstock.com/i/500p/22/45/user-icon-profile-line-isolated-on-white-vector-50642245.jpg" alt="">
                                    <?php
                                    } else {
                                    ?>
                                        <img class="w-12 border-0.5 border-neutral-300 h-12 rounded-full sm:mb-0" src="<?= $data['user_profile_photo'] ?>" alt="">

                                    <?php
                                    }
                                    ?>

                                    <div>
                                        <p class="font-bold text-lg">
                                            <?php
                                            if ($data['is_anonymous']) {
                                                echo "Anonymous";
                                            } else {
                                                echo $data['user_name']; // You can replace this with the actual name field, e.g., $data['name']
                                            }
                                            ?>
                                        </p>


                                    </div>
                                </div>
                                <div class="xl:px-[25px]">
                                    <p><?= nl2br(htmlspecialchars($data['content'] ?? '')) ?></p>

                                    <!-- for image -->
                                    <?php
                                    $user_id = $data['user_id'];
                                    $post_id = $data['id'];

                                    $images_sql = "SELECT * FROM `post_images` WHERE post_id=$post_id";
                                    $images_query = mysqli_query($con, $images_sql);
                                    $images = [];

                                    while ($image = mysqli_fetch_assoc($images_query)) {
                                        $images[] = $image['image_path'];
                                    }

                                    $image_count = count($images);

                                    ?>



                                    <?php if ($image_count > 0): ?>
                                        <div class="w-full mt-3 flex flex-col items-center gap-1 post_container">
                                            <?php if ($image_count == 1): ?>
                                                <!-- Single Image -->
                                                <div class="flex items-center justify-center">
                                                    <img src="<?= $images[0] ?>" class="max-h-[450px] w-full object-cover" onclick="openImageModal('<?= $images[0] ?>')" alt="">
                                                </div>

                                            <?php elseif ($image_count == 2): ?>
                                                <!-- Two Images -->
                                                <div class="grid grid-cols-2 gap-1">
                                                    <?php foreach ($images as $image): ?>
                                                        <img src="<?= $image ?>" class="w-full h-[450px] object-cover" onclick="openImageModal('<?= $image ?>')" alt="">
                                                    <?php endforeach; ?>
                                                </div>

                                            <?php elseif ($image_count == 3): ?>
                                                <!-- Three Images -->
                                                <div class="grid grid-cols-2 gap-1">
                                                    <img src="<?= $images[0] ?>" class="w-full h-[300px] object-cover col-span-2" onclick="openImageModal('<?= $images[0] ?>')" alt="">
                                                    <img src="<?= $images[1] ?>" class="w-full h-[220px] object-cover" onclick="openImageModal('<?= $images[1] ?>')" alt="">
                                                    <img src="<?= $images[2] ?>" class="w-full h-[220px] object-cover" onclick="openImageModal('<?= $images[2] ?>')" alt="">
                                                </div>

                                            <?php elseif ($image_count >= 4): ?>
                                                <!-- Four or More Images -->
                                                <div class="grid grid-cols-2 gap-1">
                                                    <img src="<?= $images[0] ?>" class="w-full h-[300px] object-cover col-span-2" onclick="openImageModal('<?= $images[0] ?>')" alt="">
                                                    <img src="<?= $images[1] ?>" class="w-full h-[220px] object-cover" onclick="openImageModal('<?= $images[1] ?>')" alt="">

                                                    <div class="relative h-[220px]">
                                                        <img src="<?= $images[2] ?>" class="w-full h-full max-h-[500px] object-cover" onclick="openImageModal('<?= $images[2] ?>')" alt="">

                                                        <!-- Overlay properly centered -->
                                                        <?php if ($image_count > 3): ?>
                                                            <div post_id='<?= $post_id ?>' class="more_image_btn absolute z-10 inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-xl font-bold">
                                                                +<?= $image_count - 3 ?>

                                                                <!-- Store hidden images -->
                                                                <?php foreach (array_slice($images, 3) as $hidden_image): ?>
                                                                    <img src="<?= $hidden_image ?>" class="max-h-[500px] object-cover hidden more-images w-full"  onclick="openImageModal('<?= $hidden_image ?>')"  alt="">
                                                                <?php endforeach; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>


                                    <!-- Modal Container -->
                                    <div id="imageModal" class="fixed inset-0 hidden bg-black bg-opacity-80 flex items-center justify-center z-50">
                                        <div class="relative">
                                            <button id="closeModal" class="absolute -top-4 -right-4 text-white text-3xl"></button>
                                            <img id="modalImage" class="max-w-[90vw] max-h-[90vh] object-contain rounded-lg">
                                        </div>
                                    </div>


                                    <!-- for like -->
                                    <?php



                                    $count_like_sql = "SELECT COUNT(*) AS   like_count, GROUP_CONCAT(user_id) AS  liked_users FROM likes WHERE post_id =   $post_id";

                                    $count_like_query = mysqli_query($con,  $count_like_sql);

                                    $count_like_data = mysqli_fetch_assoc($count_like_query);

                                    $liked_user_id = explode(",", $count_like_data['liked_users']);

                                    ?>

                                    <?php

                                    $count_comment_sql = "SELECT post_id, COUNT(*) AS total_comments FROM comments WHERE post_id = $post_id GROUP BY post_id";

                                    $count_comment_query = mysqli_query($con, $count_comment_sql);

                                    $count_comment_data = mysqli_fetch_assoc($count_comment_query);

                                    ?>



                                    <div id="monitor_like_btn_group" class="w-full h-[40px] xl:mt-3 flex items-center justify-between">

                                        <?php
                                        $liked = false;

                                        foreach ($liked_user_id as $id) {
                                            if ($id == $monitor_id) {
                                                $liked = true;
                                                break;
                                            }
                                        }
                                        ?>

                                        <button post_id='<?= $data['id'] ?>' liked="<?= $liked ?>" id="monitor_like_btn" class="flex items-center gap-1 active:scale-90 duration-150">
                                            <?php if ($liked): ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6  stroke-red-500 fill-red-500 pointer-events-none">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                                </svg>
                                            <?php else: ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 pointer-events-none ">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                                </svg>
                                            <?php endif; ?>
                                            <p id="count"> <?= $count_like_data['like_count'] ?></p>
                                        </button>

                                        <button post_id='<?= $data['id'] ?>' class="comment_btn flex items-center gap-1 active:scale-90 duration-150">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" pointer-events-none size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                                            </svg>
                                            <p class="total_comments" post_id='<?= $data['id'] ?>'><?= $count_comment_data['total_comments'] ?></p>
                                        </button>

                                        <!-- <button class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                            </svg>
                                        </button> -->
                                        <div></div>
                                    </div>


                                    <?php
                                    $comment_sql = "SELECT * FROM comments WHERE post_id = $post_id AND parent_id IS NULL ORDER BY created_at ASC";
                                    $comment_query = mysqli_query($con, $comment_sql);
                                    $comment_count = mysqli_num_rows($comment_query);

                                    ?>

                                    <div post_comment_box_id='<?= $data['id'] ?>' id="comment_section" class=" hidden flex flex-col gap-3 border-t border-t-neutral-300  pb-5 duration-300">

                                        <div post_id="<?= $post_id ?>" class="comment_group p-3 pt-5">
                                            <?php if ($comment_count == 0) : ?>

                                                <div class="w-full h-[40px] flex items-center justify-center">
                                                    <p>There is no comment yet!</p>
                                                </div>

                                            <?php else: ?>
                                                <?php while ($data = mysqli_fetch_assoc($comment_query)) : ?>

                                                    <?php

                                                    $comment_id = $data['id'];

                                                    $user_id = $data['user_id'];
                                                    $user_sql = "SELECT profile_photo, name , role FROM users WHERE id = $user_id";
                                                    $user_query = mysqli_query($con, $user_sql);
                                                    $user_data = mysqli_fetch_assoc($user_query);

                                                    $reply_sq = "SELECT comments.*, 
                                                                users.name AS name,   
                                                                users.profile_photo AS profile_photo
                                                                FROM comments
                                                                JOIN users ON comments.user_id = users.id
                                                                WHERE comments.post_id = $post_id AND comments.parent_id = $comment_id
                                                                ORDER BY comments.created_at ASC";
                                                    $reply_query = mysqli_query($con, $reply_sq);
                                                    $reply_count = mysqli_num_rows($reply_query);


                                                    ?>

                                                    <div class="comment_box flex items-start gap-2.5 mt-3">
                                                        <img class="w-8 h-8 rounded-full" src="<?= $user_data["profile_photo"] ?>" alt="Jese image">
                                                        <div class="flex flex-col gap-1 w-full ">
                                                            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                                                <span comment_id='<?= $data['id'] ?>' class="name text-sm font-semibold text-gray-900 dark:text-white"><?= htmlspecialchars($user_data['name']) ?></span>
                                                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400"><?= $data['created_at'] ?></span>
                                                            </div>
                                                            <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-neutral-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                                                <p class="text-sm font-normal text-gray-900 dark:text-white"><?= htmlspecialchars($data['content']) ?></p>
                                                            </div>
                                                            <?php

                                                            if ($reply_count != 0) {
                                                            ?>

                                                                <button post_id="<?= $post_id ?>" parent_id="<?= $comment_id ?>" class="view_reply_btn flex items-center gap-2 text-sm w-full text-start font-normal text-neutral-700 dark:text-white">View more reply...
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                                                                    </svg>
                                                                </button>

                                                                <div post_id="<?= $post_id ?>" parent_id="<?= $comment_id ?>" class="reply_comment_container hidden w-full py-1">
                                                                    <?php while ($reply_data = mysqli_fetch_assoc($reply_query)) :  ?>

                                                                        <!-- _____________________________ -->

                                                                        <div class="comment_box flex items-start gap-2.5 mt-3">
                                                                            <img class="w-8 h-8 rounded-full" src="<?= $reply_data['profile_photo'] ?>" alt="Jese image">
                                                                            <div class="flex flex-col gap-1 w-full ">
                                                                                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                                                                    <span class="name text-sm font-semibold text-gray-900 dark:text-white"><?= $reply_data['name'] ?></span>
                                                                                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400"><?= $reply_data['created_at'] ?></span>
                                                                                </div>
                                                                                <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-neutral-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                                                                                    <p class="text-sm font-normal text-gray-900 dark:text-white"><?= htmlspecialchars($reply_data['content']) ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    <?php endwhile; ?>

                                                                </div>

                                                            <?php
                                                            } else {
                                                            ?>

                                                                <div post_id="<?= $post_id ?>" parent_id="<?= $comment_id ?>" class="reply_comment_container hidden w-full py-1">

                                                                </div>

                                                            <?php
                                                            }
                                                            ?>

                                                        </div>

                                                        <button post_id="<?= $post_id ?>" comment_id="<?= $data['id'] ?>" class="comment_reply_btn text-sm text-start font-normal text-gray-500 mt-9 dark:text-gray-400 ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 pointer-events-none">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m15 15 6-6m0 0-6-6m6 6H9a6 6 0 0 0 0 12h3" />
                                                            </svg>

                                                        </button>
                                                    </div>


                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>

                                        <div class="w-full p-3">

                                            <div post_id="<?= $post_id ?>" class="reply_mention_box hidden w-full bg-white flex items-center justify-between border py-1 px-2 mb-1 rounded">
                                                <div class="flex items-center">
                                                    <p class="reply_to text-sm text-neutral-500"></p>
                                                    <input post_id="<?= $post_id ?>" type="text" name="" id="" class="reply_to text-sm text-blue-500 outline-none border-none p-0 bg-transparent" value="">
                                                </div>
                                                <button post_id="<?= $post_id ?>" class="close_reply_mention_box_btn active:scale-90 duration-150">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-neutral-500 pointer-events-none">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <form post_id="<?= $post_id ?>" id="monitor_comment_form" class="comment_form w-full flex gap-3 items-center">
                                                <div class="w-full min-w-[200px]">
                                                    <input required id="input_comment" name="context" class="w-full bg-transparent bg-white placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Type here..." />
                                                </div>
                                                <button id="form_button" post_id="<?= $post_id ?>" class="monitor_comment_btn rounded-md py-2 px-4 border border-neutral-300 bg-white text-center text-sm text-white transition-all active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="submit">
                                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="size-5 pointer-events-none" stroke="#d4d4d4">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M10 14L13 21L20 4L3 11L6.5 12.5" stroke="#525252" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>

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

<?php include("./template/monitor_footer.php") ?>