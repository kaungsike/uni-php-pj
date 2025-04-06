<!-- new feedback -->

<!-- <div id="modal" class="blur-me absolute hidden z-50 h-full min-h-screen top-0 flex justify-center w-full xl:pl-[256px] xl:pt-[180px]">
    <div class="mx-auto bg-white xl:w-[900px] h-[600px] flex-col items-center z-50 border border-neutral-300 rounded-lg p-6">
        <form id="monitor_new_feedback_form" method="POST" enctype="multipart/form-data" class="flex w-full h-full flex-1 flex-col justify-between gap-3">
            <div class="flex items-center justify-between w-full h-[50px]">
                <div class="flex items-center gap-5">
                    <h1 class="text-2xl font-bold">Post it </h1>
                </div>
                <button type="button" id="closeModal" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <hr>

            <div class="w-full space-y-1">
                <select name="post_as_anonymous" type="button" required class="border border-neutral-300 h-[40px] rounded-lg focus:outline-none">
                    <option value="" selected>Feedback as</option>
                    <option value="1">Anonymous</option>
                    <option value='0'><?= $monitor_data['name'] ?></option>
                </select>
            </div>
            <div class="w-full text-left">
                <div class="flex items-center justify-start gap-2">
                    <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-neutral-600 text-sm leading-[150%]" for=":r36:-form-item">Context</label>
                </div>
                <textarea required name="context" class="flex min-h-20 w-full rounded-md border border-neutral-300 bg-transparent p-2 text-sm transition-colors duration-300 placeholder:text-neutral-400 focus:border-secondary-neutral focus-visible:outline-none disabled:cursor-not-allowed disabled:bg-neutral-100"
                    placeholder="Share your thoughts" rows="3" maxlength="160"
                    onfocus="this.setSelectionRange(0, 0)">
                </textarea>
            </div>


            <div class="post_images_container rounded-lg w-full h-[175px] flex items-center p-1 overflow-x-scroll">
                <div class="there_is_no_image first:flex h-full w-full hidden items-center justify-evenly">
                    <p>There is no image.</p>
                </div>
                <div>

                </div>
            </div>

            <div class="flex flex-col items-center gap-4 sm:mt-auto xl:justify-between sm:flex-row sm:justify-end">
                <div class="flex items-center justify-center">
                    <label for="dropzone-file" class="flex items-center justify-center w-[30px] h-[30px] cursor-pointer dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                        <input id="dropzone-file" name="images[]" multiple type="file" class="hidden" />
                    </label>
                </div>
                <button id="monitor_new_feedback_btn" class="border mt-auto border-neutral-300 flex items-center justify-center xl:w-[120px] py-2 rounded-md h-[42px] min-w-[120px] transition-colors duration-150" type="submit">
                    <span class="inline-flex items-center gap-2 whitespace-nowrap">
                        Post
                        <svg class="pointer-events-none" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div> -->

<div id="modal" class="blur-me fixed hidden z-50 inset-0 flex justify-center items-center p-4 sm:p-8 overflow-y-auto">
  <div class="w-full max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-3xl bg-white h-auto max-h-[90vh] flex flex-col items-center border border-neutral-300 rounded-lg p-4 sm:p-6 overflow-y-auto">
    <form id="monitor_new_feedback_form" method="POST" enctype="multipart/form-data" class="flex w-full h-full flex-col justify-between gap-4">
      <div class="flex items-center justify-between h-12">
        <h1 class="text-xl sm:text-2xl font-bold">Post it</h1>
        <button type="button" id="closeModal" class="text-gray-500 hover:text-gray-700">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>
      <hr>

      <div class="w-full space-y-2">
        <select name="post_as_anonymous" required class="border border-neutral-300 h-10 rounded-lg w-full px-2 focus:outline-none">
          <option value="" selected>Feedback as</option>
          <option value="1">Anonymous</option>
          <option value='0'><?= $monitor_data['name'] ?></option>
        </select>
      </div>

      <div class="w-full text-left">
        <label class="text-sm text-neutral-600">Context</label>
        <textarea name="context" required rows="3" maxlength="160"
          class="w-full min-h-[80px] rounded-md border border-neutral-300 p-2 text-sm placeholder:text-neutral-400 focus:border-secondary-neutral focus-visible:outline-none"
          placeholder="Share your thoughts" onfocus="this.setSelectionRange(0, 0)">
        </textarea>
      </div>

      <div class="post_images_container rounded-lg w-full h-[175px] flex items-center p-1 overflow-x-auto bg-neutral-50">
        <div class="there_is_no_image first:flex w-full hidden items-center justify-evenly">
          <p>There is no image.</p>
        </div>
        <div></div>
      </div>

      <div class="flex flex-col sm:flex-row sm:justify-between items-center gap-4 mt-4">
        <label for="dropzone-file" class="flex items-center justify-center w-10 h-10 cursor-pointer hover:bg-gray-100 rounded-full border border-neutral-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="m2.25 15.75 5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3.75 20.25h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5Z" />
          </svg>
          <input id="dropzone-file" name="images[]" multiple type="file" class="hidden" />
        </label>

        <button id="monitor_new_feedback_btn" type="submit"
          class="border border-neutral-300 flex items-center justify-center w-full sm:w-[120px] h-10 rounded-md text-sm font-medium transition-colors duration-150">
          <span class="inline-flex items-center gap-2">
            Post
            <svg stroke="currentColor" fill="currentColor" viewBox="0 0 20 20" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </button>
      </div>
    </form>
  </div>
</div>


<!-- edit profile -->

<!-- monitor -->

<!-- <div id="edit_profile_modal" class="blur-me absolute hidden z-50 h-full min-h-screen top-0 flex justify-center w-full xl:pl-[256px] xl:pt-[100px]">

    <?php
    $user_data_sql = "SELECT * FROM `users` WHERE `id` = '$monitor_id'";
    $user_data_query = mysqli_query($con, $user_data_sql);
    $user_data = mysqli_fetch_assoc($user_data_query);
    ?>

    <div class="p-0 xl:p-3 xl:h-[700px] border border-neutral-300 sm:w-full sm:max-w-xl rounded-lg bg-white" style="pointer-events: auto;">
        <form method="post" id="edit_profile_form" class="space-y-4 h-[95%] flex flex-col px-6 pb-1 max-sm:py-4">
            <input type="hidden" name="user_id" value="<?= $monitor_id ?>">
            <div class="flex items-end justify-between space-y-6 text-center px-6 pt-2 pb-4">
                <h2 id="radix-:r1d:" class="font-bold text-[1.25rem] leading-normal title-3">Edit Profile</h2>
                <button type="button" id="close_edit_profile_modal" class="flex items-center pb-1 justify-center mt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="pointer-events:non size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                </button>
            </div>
            <div data-orientation="horizontal" role="none" class="shrink-0 bg-neutral-200 h-px w-full max-sm:hidden mb-3"></div>

            <div class="relative overflow-hidden h-[50vh] sm:h-[60vh]" style="position: relative; --radix-scroll-area-corner-width: 0px;">
                <div data-radix-scroll-area-viewport="" class="h-full w-full rounded-[inherit] [&amp;>div]:h-full" style="overflow: hidden scroll;">


                    <div class="w-full flex items-center justify-center">
                        <div class="w-[75px] h-[75px] p-1 rounded-full overflow-hidden border border-neutral-300">
                            <img id="edit_profile_image" src="<?= $user_data['profile_photo'] ?>" class="w-full h-full object-cover rounded-full" alt="">
                            <input type="file" class="hidden" name="new_profile_photo" id="profile_photo">
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="flex items-center justify-start gap-2 mb-2">
                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-neutral-600 text-sm leading-[150%]" for=":r4q:-form-item">Profile Photo</label>
                        </div>
                        <?php
                        $sql = "SELECT * FROM `default_images`";
                        $query = mysqli_query($con, $sql);
                        ?>
                        <div class="w-full h-[95%] overflow-y-scroll border border-neutral-300 rounded-lg grid grid-cols-5 gap-2 p-3">
                            <div class="flex items-center justify-center w-[70px] h-[70px] rounded-full overflow-hidden border border-neutral-300">
                                <label class="flex  flex-col items-center justify-center w-full h-[70px] border-2rounded-lg cursor-pointer bg-gray-50  hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                    </div>
                                    <input type="hidden" name="profile_base64" id="hidden_profile_base64">
                                    <input name="images[]" id="input_new_profile" type="file" class="images_upload image_input hidden">
                                    <input type="hidden" name="profile_photo_url" id="profile_photo_url">

                                </label>
                            </div>

                            <?php while ($image = mysqli_fetch_assoc($query)) : ?>
                                <div class="default_profiles_images active:scale-95 duration-150 w-[70px] h-[70px] rounded-full overflow-hidden cursor-pointer border-2 border-neutral-300 flex items-center justify-center">
                                    <img src="<?= $image['image_url'] ?>" class="w-full pointer-events-none bg-cover select-none" alt="">
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    <div class="space-y-1 w-full text-left">
                        <div class="flex items-center justify-start gap-2">
                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-neutral-600 text-sm leading-[150%]" for=":r4q:-form-item">Name</label>
                        </div>
                        <div class="group inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm transition-all duration-300">
                            <input placeholder="Name" class="flex-1 bg-transparent placeholder:text-neutral-400 focus:outline-none disabled:cursor-not-allowed disabled:opacity-50" value="<?= $user_data['name'] ?>" name="name">
                        </div>
                    </div>

                    <div class="space-y-1 w-full text-left">
                        <div class="flex items-center justify-start gap-2">
                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-neutral-600 text-sm leading-[150%]" for="bio">Bio</label>
                        </div>
                        <textarea
                            class="flex min-h-20 w-full rounded-md border border-neutral-300 bg-transparent p-2 text-sm transition-colors duration-300 placeholder:text-neutral-400 focus:border-secondary-neutral focus-visible:outline-none disabled:cursor-not-allowed disabled:bg-neutral-100 aria-[invalid='true']:border-destructive-600"
                            placeholder="Share a short bio about yourself"
                            rows="3"
                            name="bio"
                            maxlength="160"
                            id="bio"
                            aria-describedby="bio-description"
                            aria-invalid="false"><?= htmlspecialchars($user_data['bio'] ?? '') ?></textarea>
                    </div>

                </div>
            </div>

            <div data-orientation="horizontal" role="none" class="shrink-0 bg-neutral-200 h-px w-full max-sm:hidden"></div>
            <div class="flex xl:mt-[10px] flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2 px-6 max-sm:py-4">
                <button type="submit" id="edit_profile_btn" class="px-6 py-2 border border-neutral-300 min-h-[42px] min-w-[146px] text-neutral-800 flex items-center justify-center rounded-lg text-sm font-bold">
                    Save Change
                </button>
            </div>
    </div>
    </form>
</div> -->

<div id="edit_profile_modal" class="blur-me fixed hidden z-50 inset-0 flex justify-center items-center p-4 sm:p-8 overflow-y-auto">

    <?php
    $user_data_sql = "SELECT * FROM `users` WHERE `id` = '$monitor_id'";
    $user_data_query = mysqli_query($con, $user_data_sql);
    $user_data = mysqli_fetch_assoc($user_data_query);
    ?>

    <div class="w-full max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-3xl bg-white h-auto max-h-[90vh] flex flex-col items-center border border-neutral-300 rounded-lg xl:p-4 p-0 sm:p-6 overflow-y-auto">
        <form method="post" id="edit_profile_form" class="space-y-4 h-full flex flex-col px-6 pb-4 max-sm:py-4">
            <input type="hidden" name="user_id" value="<?= $monitor_id ?>">

            <div class="flex items-end justify-between  text-center px-6 pt-2 pb-4">
                <h2 class="font-bold text-xl sm:text-2xl leading-normal">Edit Profile</h2>
                <button type="button" id="close_edit_profile_modal" class="flex items-center pb-1 justify-center mt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="bg-neutral-200 h-px w-full mb-3 hidden sm:block"></div>

            <div class="relative overflow-hidden h-[400px]">
                <div class="h-full w-full rounded-lg overflow-scroll">

                    <!-- Profile Photo Section -->
                    <div class="w-full flex items-center justify-center">
                        <div class="w-[75px] h-[75px] p-1 rounded-full overflow-hidden border border-neutral-300">
                            <img id="edit_profile_image" src="<?= $user_data['profile_photo'] ?>" class="w-full h-full object-cover rounded-full" alt="Profile Photo">
                            <input type="file" class="hidden" name="new_profile_photo" id="profile_photo">
                        </div>
                    </div>

                    <!-- Default Images Section -->
                    <div class="w-full">
                        <div class="flex items-center justify-start gap-2 mb-2">
                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-neutral-600 text-sm leading-[150%]" for=":r4q:-form-item">Profile Photo</label>
                        </div>
                        <?php
                        $sql = "SELECT * FROM `default_images`";
                        $query = mysqli_query($con, $sql);
                        ?>
                        <div class="w-full h-[95%] overflow-y-scroll border border-neutral-300 rounded-lg grid grid-cols-5  gap-2 p-3">
                            <div class="flex items-center justify-center w-[70px] h-[70px] rounded-full overflow-hidden border border-neutral-300">
                                <label class="flex  flex-col items-center justify-center w-full h-[70px] border-2rounded-lg cursor-pointer bg-gray-50  hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                    </div>
                                    <input type="hidden" name="profile_base64" id="hidden_profile_base64">
                                    <input name="images[]" id="input_new_profile" type="file" class="images_upload image_input hidden">
                                    <input type="hidden" name="profile_photo_url" id="profile_photo_url">

                                </label>
                            </div>

                            <?php while ($image = mysqli_fetch_assoc($query)) : ?>
                                <div class="default_profiles_images active:scale-95 duration-150 w-[70px] h-[70px] rounded-full overflow-hidden cursor-pointer border-2 border-neutral-300 flex items-center justify-center">
                                    <img src="<?= $image['image_url'] ?>" class="w-full pointer-events-none bg-cover select-none" alt="">
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    <!-- Name Section -->
                    <div class="space-y-1 w-full text-left">
                        <label class="text-sm text-neutral-600">Name</label>
                        <div class="group inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm">
                            <input placeholder="Name" class="flex-1 bg-transparent placeholder:text-neutral-400 focus:outline-none" value="<?= $user_data['name'] ?>" name="name">
                        </div>
                    </div>

                    <!-- Bio Section -->
                    <div class="space-y-1 w-full text-left">
                        <label class="text-sm text-neutral-600">Bio</label>
                        <textarea
                            class="flex min-h-20 w-full rounded-md border border-neutral-300 bg-transparent p-2 text-sm placeholder:text-neutral-400 focus:border-secondary-neutral focus-visible:outline-none"
                            placeholder="Share a short bio about yourself"
                            rows="3"
                            name="bio"
                            maxlength="160"
                            id="bio"><?= htmlspecialchars($user_data['bio'] ?? '') ?></textarea>
                    </div>
                </div>
            </div>

            <div class="bg-neutral-200 h-px w-full mb-3 hidden sm:block"></div>

            <!-- Save Button -->
            <div class="flex  sm:justify-end sm:space-x-2 py-4">
                <button type="submit" id="edit_profile_btn" class="px-6 py-2 border border-neutral-300 min-h-[42px] min-w-[146px] text-neutral-800 flex items-center justify-center rounded-lg text-sm font-bold">
                    Save Change
                </button>
            </div>

        </form>
    </div>
</div>



