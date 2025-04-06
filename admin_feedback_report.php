<?php include("./template/monitor_header.php") ?>

<div id="main_container" class="w-full h-full">

    <?php include("./template/monitor_sidebar.php") ?>

    <div class="sm:ml-64 xl:m-0 print:w-full print:flex print:justify-center print:items-center print:h-screen">

        <?php include("./template/monitor_nav.php") ?>

        <!-- pullout the data from sql -->

        <main id="app" class="w-full print:w-screen min-h-screen flex-col flex justify-center items-center overflow-y-auto scroll-smooth max-sm:mt-16 pt-0">

            <div class=" xl:ml-[255px]">

                <form id="feedback_report_form" action="">
                    <div id="feedback-report" class="max-w-4xl mt-7 mx-auto relative bg-white border border-gray-300 p-8 rounded-lg shadow-lg print:shadow-none print:rounded-none print:p-0 print:border-none">

                        <!-- University Header -->
                        <header class="border-b pb-4 mb-8 flex flex-col md:flex-row items-center justify-between">
                            <div>
                                <h1 class="text-2xl font-bold uppercase tracking-wide text-center md:text-left">Office of Student Affairs</h1>
                                <p class="text-sm text-gray-600 text-center md:text-left">University of Computer Studies ( Hpa-an )</p>
                            </div>
                            <img src="./ucshlogo.jpeg" alt="University Logo" class="w-20 h-20 object-contain mt-4 md:mt-0" />
                        </header>

                        <!-- Report Title -->
                        <section class="text-center mb-10">
                            <h2 class="text-3xl font-semibold uppercase">Feedback Summary Report</h2>
                            <p class="text-sm text-gray-600 mt-1">Date: April 6, 2025</p>
                            <p class="text-sm text-gray-600">Compiled by: Feedback Administrator</p>
                        </section>

                        <!-- Introduction -->
                        <section class="mb-8">
                            <p>
                                This report compiles notable student feedback received during the current semester. It is intended to inform the relevant departments of issues and suggestions raised by students to enhance the academic and campus experience.
                            </p>
                        </section>

                        <!-- Feedback Entries -->
                        <section class="space-y-10">
                            <div>
                                <h3 id="report_title" class="font-bold text-lg underline mb-1"> Room 204 Equipment Malfunction</h3>

                                <input
                                    type="text"
                                    id="report_title_input"
                                    class="hidden border-x-0 border-y-0 border-b border-gray-300 focus:border-black focus:outline-none p-2 w-full mt-2"
                                    placeholder="Type your report title here" />


                                <p id="report_content" class="">
                                    Students from various classes have reported that the projector in Room 204 is not operational, and the air conditioning system fails to maintain a comfortable environment. These conditions are disrupting the learning experience.
                                </p>

                                <textarea
                                    id="report_content_input"
                                    class="hidden border-b border-x-0 border-y-0 border-gray-300 focus:border-black focus:outline-none outline-none p-2 w-full mt-2 resize-none"
                                    placeholder="Type your report here"></textarea>


                                <p class="mt-2 text-sm">
                                    <strong>Action Required:</strong> Facilities Maintenance Department
                                </p>
                            </div>


                        </section>

                        <!-- Signature Section -->
                        <section class="mt-10 print:mt-10">
                            <div class="flex xl:flex-row flex-col items-start xl:items-center xl:h-[70px] justify-between">
                                <div class="flex gap-3 items-center text-center md:text-left xl:h-[70px]">
                                    <!-- <p class=""><img class="w-[150px]" src="./signature_.jpg" alt=""></p> -->
                                    <p class=""><img class="w-[150px]" src="./admin.png" alt=""></p>
                                    <p class="text-sm">Admin Signature</p>
                                </div>
                                <div class="flex gap-3 text-center items-center md:text-right xl:h-[70px]">
                                    <p id="report_date" class="w-[150px]">13 / 3 / 2025</p>
                                    <input type="date" id="report_date_input" class="hidden border-x-0 border-y-0 border-b border-gray-300 focus:border-black focus:outline-none p-2 w-full mt-2" />
                                    <p class="text-sm">Date</p>
                                </div>
                            </div>
                        </section>

                        <!-- Footer -->
                        <footer class="mt-10 text-xs text-center text-gray-500 print:text-left">
                            Confidential • University Feedback System • Do not distribute without permission
                        </footer>

                        <!-- Print Button -->

                    </div>

                    <div class="text-center mt-8 no-print mb-10">
                        <button id="edit_report_btn" class="px-6 py-2 border border-gray-300 rounded-md ">
                            Edit Report
                        </button>
                        <button id="cancle_edit_report_btn" class=" hidden px-6 py-2 border border-gray-300 rounded-md ">
                            Cancel
                        </button>
                        <button id="print_report_btn" onclick="window.print()" class="bg-gray-900 text-white px-6 py-2 rounded-md">
                            Print Report
                        </button>
                        <button id="save_report_btn" class="bg-green-600 text-white hidden  px-6 py-2 border border-gray-300 rounded-md ">
                            Save
                        </button>
                    </div>
                </form>

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