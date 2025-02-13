<?php include("./template/header.php") ?>

<div class="flex bg-white xl:px-[200px] flex-col">
    <div class="flex justify-between items-center my-auto mt-16">
        <div class="xl:w-[50%] flex items-center justify-center">
            <img class="xl:w-[600px]" src="./src/Sign up-rafiki.svg" alt="">
        </div>

        <div class="xl:w-[50%] flex items-center justify-center">
            <div class="rounded-lg p-8 w-full max-w-md">
                <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">
                    Sign in
                </h1>

                <form action="save_signin.php" method="POST" class="space-y-4">

                    <div class="space-y-1 w-full text-left">
                        <div class="flex items-center justify-start gap-2"><label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-neutral-600 text-sm leading-[150%]" for=":rt:-form-item">Email</label></div>
                        <div
                            class="inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm transition-all duration-300 focus-within:border-secondary-neutral "
                            aria-invalid="false">
                            <input name="email"
                                class="flex-1 bg-transparent placeholder:text-neutral-400 focus:outline-none disabled:cursor-not-allowed disabled:opacity-50" />
                        </div>
                    </div>
                    <div class="space-y-1 w-full text-left">
                        <div class="flex items-center justify-start gap-2"><label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-neutral-600 text-sm leading-[150%]" for=":rt:-form-item">Password</label></div>
                        <div
                            class="inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm transition-all duration-300 focus-within:border-secondary-neutral "
                            aria-invalid="false">
                            <input name="password"
                                class="flex-1 bg-transparent placeholder:text-neutral-400 focus:outline-none disabled:cursor-not-allowed disabled:opacity-50" />
                        </div>
                    </div>

                    <button class="w-full py-3 flex mt-5 justify-center bg-neutral-300 rounded-lg">
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