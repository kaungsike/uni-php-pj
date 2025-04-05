<?php include("./template/monitor_header.php") ?>

<div id="main_container" class="w-full h-full">

    <?php include("./template/monitor_sidebar.php") ?>

    <div class="sm:ml-64">

        <?php include("./template/monitor_nav.php") ?>

        <!-- pullout the data from sql -->

        <main id="app" class="w-full min-h-screen flex flex-col items-center overflow-y-auto scroll-smooth max-sm:mt-16 pt-0">

            <div class="w-full">

                <?php

                $student_list_sql = "SELECT * FROM `users`";
                $student_list_query = mysqli_query($con, $student_list_sql);

                ?>

                <div class="mx-auto xl:w-[880px] border border-neutral-300 rounded-lg p-4 mt-5">
                    <ol class="mt-3 divide-y divide-gray-200 dark:divide-gray-700">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                            <!-- <div class="flex items-center justify-between flex-column mt-2 flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white  ">
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>
                                    </div>
                                    <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50  dark:border-gray-600  dark:text-white " placeholder="Search for users">
                                </div>
                                <a class="rounded-md py-2 px-4 border text-center text-sm  border-neutral-800 text-black transition-all shadow-md cursor-pointer" type="button">
                                    Add New
                                </a>
                            </div> -->

                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Id
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Student ID
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Email
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($student = mysqli_fetch_assoc($student_list_query)) : ?>
                                        <tr  student_id="<?= $student['id'] ?>"  class="student_row bg-white border-b h-[75px] dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <form student_id="<?= $student['id'] ?>" class="edit_form" action="">
                                                <td class="px-6 py-4">
                                                    <p class=""><?= $student['id'] ?></p>
                                                    <input name="id" type="text" value="<?= $student['id'] ?>" class="hidden">
                                                </td>
                                                <td class="px-6 py-4 ">
                                                    <p class="org_name" student_id="<?= $student['id'] ?>"><?= $student['name'] ?></p>
                                                    <input name="name" student_id="<?= $student['id'] ?>" type="text" name="id" value="<?= $student['name'] ?>" class="edit_boxs edit_name border text-sm border-gray-300 rounded-lg p-2 max-w-[120px] dark:bg-gray-700 dark:border-gray-600 dark:text-white hidden" placeholder="">
                                                </td>
                                                <td class="px-6 py-4">
                                                    <p class="org_studentId" student_id="<?= $student['id'] ?>"><?= $student['student_id'] ?></p>
                                                    <input name="studentId" student_id="<?= $student['id'] ?>" type="text" name="id" value="<?= $student['student_id'] ?>" class="edit_boxs edit_studentId border text-sm border-gray-300 rounded-lg p-2 max-w-[120px] dark:bg-gray-700 dark:border-gray-600 dark:text-white hidden" placeholder="">

                                                </td>
                                                <td class="px-6 py-4">
                                                    <p class="org_email" student_id="<?= $student['id'] ?>"><?= $student['email'] ?></p>
                                                    <input name="email" student_id="<?= $student['id'] ?>" type="text" name="id" value="<?= $student['email'] ?>" class="edit_boxs edit_email border text-sm border-gray-300 rounded-lg p-2 w-auto dark:bg-gray-700 dark:border-gray-600 dark:text-white hidden" placeholder="">

                                                </td>
                                                <td class="px-6 py-4 w-[150px]">

                                                    <div student_id="<?= $student['id'] ?>" class="edit_btn_group flex items-center gap-2">
                                                        <button type="button" student_id="<?= $student['id'] ?>" class="edit_student_btn font-medium text-sm flex items-center justify-center border border-neutral-300 w-[70px] py-1 rounded text-gray-600">Edit</button>
                                                        <p class="text-2xl text-neutral-500">|</p>
                                                        <button data-modal-target="deleteModal" data-modal-toggle="deleteModal" type="button" student_id="<?= $student['id'] ?>" class="delete_student_btn font-medium text-sm flex w-[70px] items-center 
                                                        justify-center border border-neutral-300 py-1 rounded text-red-600">Delete</button>
                                                    </div>

                                                    <div student_id="<?= $student['id'] ?>" class="save_btn_group hidden flex items-center gap-2">
                                                        <button type="button" student_id="<?= $student['id'] ?>" class="cancle_edit_student_btn font-medium text-gray-600 w-[70px]
                                                        flex items-center justify-center border border-neutral-300 p-1 rounded">Cancle</button>
                                                        <p>|</p>
                                                        <button type="submit" student_id="<?= $student['id'] ?>" class="save_edit_student_btn flex border border-neutral-300 p-1 items-center justify-center font-medium text-green-500 rounded w-[70px]">Save</button>
                                                    </div>

                                                </td>
                                            </form>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </ol>
                </div>

            </div>

        </main>

    </div>

</div>

<!-- Main modal -->
<div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <button id="close_delete_student_modal_btn" type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
            </svg>
            <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
            <div class="flex justify-center items-center space-x-4">
                <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    No, cancel
                </button>
                <button id="delete_student_confirm_btn" type="submit" class=" py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    Yes, I'm sure
                </button>
            </div>
        </div>
    </div>
</div>


<?php include("./template/footer.php") ?>