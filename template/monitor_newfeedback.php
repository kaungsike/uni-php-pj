<div id="modal" class="blur-me absolute hidden z-50 h-full top-0 flex justify-center w-full xl:pl-[256px] xl:pt-[200px]">
    <div class="mx-auto bg-white xl:w-[900px] flex-col h-[500px] items-center z-50 border border-neutral-300 rounded-lg p-6">
        <form id="monitor_new_feedback_form" method="POST" enctype="multipart/form-data" class="flex w-full flex-1 flex-col justify-between gap-6">
            <div class="flex items-center justify-between w-full h-[50px]">
                <div class="flex items-center gap-5">
                    <h1 class="text-2xl font-bold">Post it </h1>
                    <select name="post_as_anonymous" type="button" required class="border border-neutral-300 rounded-lg focus:outline-none">
                        <option value="" selected>Choose one</option>
                        <option value="1">Anonymous</option>
                        <option value='0'><?= $monitor_data['name'] ?></option>
                    </select>

                </div>
                <button type="button" id="closeModal" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="w-full space-y-1">
                <div class="">
                    <textarea required name="context" class="w-full h-[120px] border border-neutral-300 rounded-lg outline-none focus:outline-none focus:border-neutral-300" name="" id="">

                    </textarea>
                </div>

            </div>

            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-[150px] border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input name="images" multiple id="dropzone-file" type="file" class="images_upload hidden" />
                </label>

                <!-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                <input name="images" multiple class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file"> -->

            </div>



            <div class="flex flex-col items-center gap-4 sm:mt-auto sm:flex-row sm:justify-end">
                <button id="monitor_new_feedback_btn" class="border border-neutral-300 flex items-center justify-center xl:w-[120px] py-2 rounded-md hover:bg-neutral-200 hover:border-neutral-700 duration-150" type="submit">
                    <span class="inline-flex items-center gap-2 whitespace-nowrap">
                        Post
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>