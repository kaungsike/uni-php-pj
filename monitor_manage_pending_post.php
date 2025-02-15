<?php include("./template/monitor_header.php") ?>

<div class="w-full h-full">

    <?php include("./template/monitor_sidebar.php") ?>

    <div class="sm:ml-64">

        <?php include("./template/monitor_nav.php") ?>

        <!-- pullout the data from sql -->

        <main class="w-full min-h-screen flex-1 overflow-y-auto scroll-smooth max-sm:mt-16 pt-0">

            <div class="w-full">
                <div class="flex mx-auto items-center xl:w-[880px] mb-10 mt-5 rounded-3xl border border-neutral-200 bg-neutral-100 p-6 sm:gap-4">
                    <p class="text-2xl font-bold">Pending Posts Manage Panel</p>
                </div>

            </div>

        </main>

    </div>

</div>

<?php include("./template/footer.php") ?>