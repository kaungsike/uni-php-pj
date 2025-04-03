<?php include("./template/monitor_header.php") ?>

<div class="w-full h-full">

    <?php include("./template/monitor_sidebar.php") ?>

    <div class="sm:ml-64">

        <?php include("./template/monitor_nav.php") ?>

        <!-- pullout the data from sql -->

        <main class="w-full min-h-screen flex-1 overflow-y-auto scroll-smooth max-sm:mt-16 pt-0">

            <div class="w-full">

                <?php

                $student_list_sql = "SELECT * FROM `users`";
                $student_list_query = mysqli_query($con, $student_list_sql);

                ?>

                <div class="mx-auto xl:w-[880px] border border-neutral-300 rounded-lg p-4 mt-5">
                    <ol class="mt-3 divide-y divide-gray-200 dark:divide-gray-700">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                            <div class="flex items-center justify-between flex-column mt-2 flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white  ">
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
                            </div>

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
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="px-6 py-4">
                                                <?= $student['id'] ?>
                                            </td>
                                            <td class="px-6 py-4">
                                                <?= $student['name'] ?>
                                            </td>
                                            <td class="px-6 py-4">
                                                <?= $student['student_id'] ?>
                                            </td>
                                            <td class="px-6 py-4">
                                                <?= $student['email'] ?>
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                            </td>
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

<?php include("./template/footer.php") ?>