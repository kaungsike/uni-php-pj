<?php include("./template/header.php") ?>

<div class="flex flex-col bg-white px-4 sm:px-8 md:px-12 lg:px-16 xl:px-[200px]">
    <div class="flex flex-col xl:flex-row justify-between items-center mt-16 gap-10">
        <!-- Image section - hidden on small screens -->
        <div class="w-full xl:w-1/2 hidden xl:flex items-center justify-center">
            <img class="w-full max-w-[600px]" src="./src/Sign up-rafiki.svg" alt="">
        </div>

        <!-- Signin form section -->
        <div class="w-full xl:w-1/2 flex items-center justify-center">
            <div class="rounded-lg p-6 sm:p-8 w-full max-w-md">
                <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">
                    Sign in
                </h1>

                <form id="signin_form" method="POST" class="space-y-4">

                    <div class="space-y-1 w-full text-left">
                        <label class="text-neutral-600 text-sm leading-[150%]" for="email">Email</label>
                        <div class="inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm transition-all ">
                            <input name="email" id="email"
                                class="flex-1 bg-transparent border-none focus:outline-none disabled:cursor-not-allowed disabled:opacity-50"
                                type="email" required />
                        </div>
                    </div>

                    <div class="space-y-1 w-full text-left">
                        <label class="text-neutral-600 text-sm leading-[150%]" for="password">Password</label>
                        <div class="inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm transition-all duration-300 ">
                            <!-- <input name="password" id="password"
                                class="flex bg-transparent border-none focus:outline-none disabled:cursor-not-allowed disabled:opacity-50"
                                type="password" required /> -->
                            <input id="password" name="password"  type="password" class=" border bg-white text-sm border-gray-300 rounded-lg p-2  dark:bg-gray-700 dark:border-gray-600 border-none w-full dark:text-white" required>
                        </div>
                    </div>

                    <button id="signin_btn" class="w-full py-3 flex mt-5 justify-center bg-neutral-300 rounded-lg">
                        Sign in
                    </button>
                </form>

                <p class="text-center text-gray-600 text-sm mt-4">
                    Already have an account?
                    <a href="./signup.php" class="text-blue-500 hover:underline">Sign up</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php include("./template/footer.php") ?>