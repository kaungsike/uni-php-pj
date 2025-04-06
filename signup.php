<?php include("./template/header.php") ?>

<div class="flex flex-col bg-white px-4 sm:px-8 md:px-12 lg:px-16 xl:px-[200px]">
    <div class="flex flex-col xl:flex-row justify-between items-center mt-16 gap-10">
        <!-- Image Section -->
        <div class="w-full xl:w-1/2 hidden xl:flex items-center justify-center">
            <img class="w-full max-w-[600px]" src="./src/Sign up-rafiki.svg" alt="">
        </div>

        <!-- Form Section -->
        <div class="w-full xl:w-1/2 flex items-center justify-center">
            <div class="rounded-lg p-6 sm:p-8 w-full max-w-md">
                <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">
                    Register
                </h1>

                <form id="signup_form" action="" method="POST" class="space-y-4">
                    <!-- Name -->
                    <div class="space-y-1 w-full text-left">
                        <label class="text-neutral-600 text-sm leading-[150%]" for="name">Name</label>
                        <div class="inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm focus-within:border-secondary-neutral">
                            <input class="flex-1 bg-white border-none placeholder:text-neutral-400 focus:outline-none" name="name" id="name" />
                        </div>
                    </div>

                    <!-- ID (Year + Major + Number) -->
                    <div class="space-y-1 w-full text-left">
                        <label class="text-neutral-600 text-sm leading-[150%]" for="id">ID</label>
                        <div class="flex flex-col sm:flex-row gap-2">
                            <select name="year" class="w-full sm:w-auto px-4 py-2 h-[40px] text-sm bg-white border border-neutral-300 rounded-md">
                                <option value="22-23">22-23</option>
                                <option value="23-24">23-24</option>
                                <option value="24-25">24-25</option>
                            </select>

                            <select name="major" class="w-full sm:w-[40%] px-4 py-2 h-[40px] text-sm bg-white border border-neutral-300 rounded-md">
                                <option value="CST">SCT</option>
                                <option value="CS">CS</option>
                                <option value="CT">CT</option>
                            </select>

                            <div class="w-full xl:flex-grow sm:w-[100px] flex h-10 items-center rounded-md border border-neutral-300 p-2 text-sm">
                                <input type="number" class=" bg-transparent placeholder:text-neutral-400 border-none xl:w-full w-[55px] focus:outline-none" name="id" />
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="space-y-1 w-full text-left">
                        <label class="text-neutral-600 text-sm leading-[150%]" for="email">Email</label>
                        <!-- <div class="inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm focus-within:border-secondary-neutral">
                            <input name="email" id="email" type="email" class="flex-1 border-none placeholder:text-neutral-400 focus:outline-none" />
                        </div> -->
                        <div class="inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm focus-within:border-secondary-neutral">
                            <input name="email" id="email" type="email" class="flex-1 border-none bg-transparent placeholder:text-neutral-400 focus:outline-none" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="space-y-1 w-full text-left">
                        <label class="text-neutral-600 text-sm" for="password">Password</label>
                        <div class="inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm focus-within:border-secondary-neutral">
                            <input minlength="6" name="password" id="password" type="password" class="flex-1 border-none bg-transparent placeholder:text-neutral-400 focus:outline-none" />
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="space-y-1 w-full text-left mb-5">
                        <label class="text-neutral-600 text-sm leading-[150%]" for="confirm_password">Confirm Password</label>
                        <div class="inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm focus-within:border-secondary-neutral">
                            <input name="confirm_password" id="confirm_password" type="password" class="flex-1 border-none bg-transparent placeholder:text-neutral-400 focus:outline-none" />
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button id="signup_btn" type="submit" class="w-full py-3 flex justify-center bg-neutral-300 rounded-lg">
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
                signUpButton.style.backgroundColor = "#d1d1d1";
            } else {
                errorMessage.textContent = "";
                signUpButton.disabled = false;
                signUpButton.style.backgroundColor = "#d4d4d4"; // keep consistent with bg-neutral-300
            }
        }

        passwordInput.addEventListener("input", validatePasswords);
        confirmPasswordInput.addEventListener("input", validatePasswords);
    });

    document.addEventListener("DOMContentLoaded", function() {
        const emailInput = document.querySelector("input[name='email']");
        const signUpButton = document.querySelector("button[type='submit']");
        const errorMessage = document.createElement("p");

        errorMessage.style.color = "red";
        errorMessage.style.fontSize = "12px";
        errorMessage.style.marginTop = "4px";
        emailInput.parentElement.appendChild(errorMessage);

        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }

        emailInput.addEventListener("input", function() {
            const email = emailInput.value;

            if (!isValidEmail(email)) {
                errorMessage.textContent = "Please enter a valid email address.";
                signUpButton.disabled = true;
                signUpButton.style.backgroundColor = "#d1d1d1";
            } else {
                errorMessage.textContent = "";
                signUpButton.disabled = false;
                signUpButton.style.backgroundColor = "#d4d4d4";
            }
        });
    });
</script>

<?php include("./template/footer.php") ?>