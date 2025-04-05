<?php include("./template/header.php") ?>

<div class="flex bg-white xl:px-[200px] flex-col">
    <div class="flex justify-between items-center my-auto mt-16">
        <div class="xl:w-[50%] flex items-center justify-center">
            <img class="xl:w-[600px]" src="./src/Sign up-rafiki.svg" alt="">
        </div>

        <div class="xl:w-[50%] flex items-center justify-center">
            <div class="rounded-lg p-8 w-full max-w-md">
                <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">
                    Register
                </h1>

                <form id="signup_form" action="" method="POST" class="space-y-4">

                    <div class="space-y-1 w-full text-left">
                        <div class="flex items-center justify-start gap-2"><label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-neutral-600 text-sm leading-[150%]" for=":rt:-form-item">Name</label></div>
                        <div class="inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm transition-all duration-300 focus-within:border-secondary-neutral "
                            aria-invalid="false">
                            <input
                                class="flex-1 bg-transparent placeholder:text-neutral-400 focus:outline-none disabled:cursor-not-allowed disabled:opacity-50"
                                name="name" />
                        </div>
                    </div>

                    <div class="space-y-1 w-full text-left focus:outline-none outline-none">
                        <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-neutral-600 text-sm leading-[150%]" for=":rt:-form-item">ID</label>
                        <div class="flex items-center space-x-2 outline-none focus:outline-none ">


                            <div class="flex items-center justify-center w-full gap-2">
                                <select id="" name="year" class="block w-full px-4 py-2 h-[40px] text-sm bg-white border border-neutral-300 rounded-md">
                                    <option value="22-23">22-23</option>
                                    <option value="23-24">23-24</option>
                                    <option value="24-25">24-25</option>
                                </select>
                                <select id="" name="major" class="block w-[40%] px-4 py-2 h-[40px] text-sm bg-white border border-neutral-300 rounded-md">
                                    <option value="CST">SCT</option>
                                    <option value="CS">CS</option>
                                    <option value="CT">CT</option>

                                </select>
                            </div>


                            <div class="w-[100px] h-10 items-center rounded-md border border-neutral-300 p-2 text-sm transition-all duration-300">
                                <input class="flex-1 bg-transparent placeholder:text-neutral-400 focus:outline-none" name="id" />
                            </div>

                        </div>
                    </div>


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
                        <div class="flex items-center justify-start gap-2"><label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-neutral-600 text-sm ">Password</label></div>
                        <div
                            class="inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm transition-all duration-300 focus-within:border-secondary-neutral "
                            aria-invalid="false">
                            <input name="password"
                                class="flex-1 bg-transparent placeholder:text-neutral-400 focus:outline-none disabled:cursor-not-allowed disabled:opacity-50" />
                        </div>
                    </div>
                    <div class="space-y-1 w-full text-left mb-5">
                        <div class="flex items-center justify-start gap-2"><label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-neutral-600 text-sm leading-[150%]">Confirm Passowrd</label></div>
                        <div
                            class="inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm transition-all duration-300 focus-within:border-secondary-neutral "
                            aria-invalid="false">
                            <input name="confirm_password" class="flex-1 bg-transparent placeholder:text-neutral-400 focus:outline-none disabled:cursor-not-allowed disabled:opacity-50" />
                        </div>
                    </div>

                    <button id="signup_btn" type="submit" class="w-full py-3 flex mt-5 justify-center bg-neutral-300 rounded-lg">
                        Sign Up
                    </button>
                </form>


                <p class="text-center text-gray-600 text-sm mt-4">
                    Already have an account?
                    <a href="./signin.php" class="text-blue-500 hover:underline">Sign In</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const passwordInput = document.querySelector("input[name='password']");
        const confirmPasswordInput = document.querySelector("input[name='confirm_password']");
        const signUpButton = document.querySelector("button[type='submit']");
        const errorMessage = document.createElement("p");

        errorMessage.style.color = "red";
        errorMessage.style.fontSize = "12px";
        errorMessage.style.marginTop = "4px";
        confirmPasswordInput.parentElement.appendChild(errorMessage);

        function validatePasswords() {
            if (passwordInput.value !== confirmPasswordInput.value) {
                errorMessage.textContent = "Passwords do not match!";
                signUpButton.disabled = true;
                signUpButton.style.backgroundColor = "#d1d1d1"; // Gray out button
            } else {
                errorMessage.textContent = "";
                signUpButton.disabled = false;
                signUpButton.style.backgroundColor = "#6b7280"; // Enable button (Original color)
            }
        }

        passwordInput.addEventListener("input", validatePasswords);
        confirmPasswordInput.addEventListener("input", validatePasswords);
    });
</script>



<?php include("./template/footer.php") ?>