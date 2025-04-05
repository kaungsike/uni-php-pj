<?php include("./template/header.php") ?>

<main class="flex flex-col min-h-screen">
  <section class="w-full h-[70px] flex items-center justify-center mx-2">
    <div class="h-[50px] border w-[400px]  2xl:w-[500px] rounded-full flex items-center justify-between px-1.5">

      <a href="./index.php" class="py-2.5 px-5 text-sm font-medium text-gray-900 border-none focus:outline-none  border border-gray-200 bg-gray-200 focus:z-10 focus:ring-4 rounded-full focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Home</a>

      <a href="./feature.php" class="py-2.5 px-5 text-sm font-medium text-gray-900 border-none focus:outline-none bg-white border border-gray-200 focus:z-10 focus:ring-4 rounded-full focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Feature</a>


      <a href="./signin.php" type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 m-0">Get Start</a>

    </div>
  </section>


  <section class="container mx-auto px-6 sm:px-8">
    <div class="flex flex-col items-center pt-8 pb-12 sm:pb-16">
      <div>
        <h2 class="text-center text-2xl uppercase leading-8 text-black font-mono sm:text-5xl sm:leading-[3rem] relative after:animate-pulse after:absolute after:-right-4 after:top-0">
          Your Opinion Matters
        </h2>
      </div>

      <div>
        <p class="mt-6 text-gray-600 text-base hidden max-sm:hidden">
          Make Quack proud by all the rewards you win from the learning!
        </p>
      </div>

    </div>

    <div class="py-8">
      <div class="relative w-full pb-[31.6074%]">
        <div class="absolute inset-0">
          <img
            src="https://images.theconversation.com/files/193018/original/file-20171102-26478-1k773b5.jpg?ixlib=rb-4.1.0&q=45&auto=format&w=926&fit=clip"
            alt="Learning"
            loading="lazy"
            class="absolute inset-0 h-full w-full object-contain" />
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 items-stretch">
      <!-- Card 1 -->
      <a href="/learning-track">
        <div class="h-full">
          <div class="h-full space-y-6 rounded-3xl border border-gray-200 bg-white p-8 transition-colors duration-300 hover:bg-gray-100">
            <div class="flex items-center gap-6">
              <div class="relative w-11 h-11 shrink-0">
                <img src="https://img.freepik.com/premium-vector/loud-speaker-icon-megaphone-icon-vector-illustration-hand-drawn-doodle-style_607987-1772.jpg?w=740" alt="Tracks" class="absolute inset-0 h-full w-full object-contain" />
              </div>
              <h3 class="text-lg font-semibold">Share Your Voice</h3>
            </div>
            <p class="text-sm text-gray-600">
              Your opinions matter! Use our feedback system to share your classroom experiences, suggest improvements, and help shape a better learning environment for everyone.
            </p>
          </div>
        </div>
      </a>

      <!-- Card 2 -->
      <a href="/learning-track">
        <div class="h-full">
          <div class="h-full space-y-6 rounded-3xl border border-gray-200 bg-white p-8 transition-colors duration-300 hover:bg-gray-100">
            <div class="flex items-center gap-6">
              <div class="relative w-11 h-11 shrink-0">
                <img src="https://img.freepik.com/free-vector/check-mark-hand-drawn-scribble-line_78370-1424.jpg?t=st=1743852918~exp=1743856518~hmac=902c9088db260741d4f68f777676553003305db6374e313e50fff106bb6c41b0&w=740" alt="Dive" class="absolute inset-0 h-full w-full object-contain" />
              </div>
              <h3 class="text-lg font-semibold"> Anonymous & Secure</h3>
            </div>
            <p class="text-sm text-gray-600">
              Feel safe to speak up. Your feedback is completely anonymous and securely stored, giving you the freedom to be honest without any worries.
            </p>
          </div>
        </div>
      </a>

      <!-- Card 3 -->
      <a href="/learning-track">
        <div class="h-full">
          <div class="h-full space-y-6 rounded-3xl border border-gray-200 bg-white p-8 transition-colors duration-300 hover:bg-gray-100">
            <div class="flex items-center gap-6">
              <div class="relative w-11 h-11 shrink-0">
                <img src="https://i.pinimg.com/736x/ba/aa/9b/baaa9be8855527f464bb91c57d73cc38.jpg" alt="Certificate" class="absolute inset-0 h-full w-full object-contain" />
              </div>
              <h3 class="text-lg font-semibold">Drive Real Change</h3>
            </div>
            <p class="text-sm text-gray-600">
              Your insights go straight to the people who can make a difference. Whether it's about teaching, facilities, or support—your feedback sparks real improvements.
            </p>
          </div>
        </div>
      </a>
    </div>
  </section>

  <section class="container mx-auto px-6 sm:px-8">

    <div class="mt-12 flex w-full flex-col gap-16 rounded-2xl border border-primary-300 bg-primary p-6 sm:my-16 sm:rounded-[2rem] sm:p-[5.625rem]">
      <h2 class="relative h-12 whitespace-nowrap text-center text-3xl text-primary-neutral uppercase font-hy-pixel max-sm:hidden">
      Shaping a Better Learning Experience
      </h2>
      <div class="opacity-100">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-16">
          <img alt="Experience Level" loading="lazy" width="450" height="406" decoding="async" src="https://images.theconversation.com/files/193015/original/file-20171102-26462-4vukrh.jpg?ixlib=rb-4.1.0&q=45&auto=format&w=754&h=886&fit=crop&dpr=1" class="text-transparent" />
          <div class="flex w-full flex-col">
            <div role="radiogroup" aria-required="false" dir="ltr" class="grid items-center gap-4" tabindex="0">
              <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="newly_to_web3" class="group sm:headline-m headline-s inline-flex w-full items-center justify-start rounded-xl border border-primary-300 bg-primary-400 p-6 text-left text-primary-neutral transition-colors duration-300 hover:bg-primary-200 focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary-100">
              Help Us Improve Your Learning Journey
              </button>
              <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="some_experience" class="group sm:headline-m headline-s inline-flex w-full items-center justify-start rounded-xl border border-primary-300 bg-primary-400 p-6 text-left text-primary-neutral transition-colors duration-300 hover:bg-primary-200 focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary-100">
              Shape the Future of Education
              </button>
              <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="experienced_developer" class="group sm:headline-m headline-s inline-flex w-full items-center justify-start rounded-xl border border-primary-300 bg-primary-400 p-6 text-left text-primary-neutral transition-colors duration-300 hover:bg-primary-200 focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary-100">
              Be Part of the Change
              </button>
              <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="startup_founder" class="group sm:headline-m headline-s inline-flex w-full items-center justify-start rounded-xl border border-primary-300 bg-primary-400 p-6 text-left text-primary-neutral transition-colors duration-300 hover:bg-primary-200 focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary-100">
              We Value Your Honest Opinion
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>


  <footer class="bg-white py-10 px-6 md:px-12 lg:px-20 mt-auto">
    <div class="w-full flex text-gray-600 justify-center border-t pt-4">
      <div class="xl:w-[1284px] flex items-center justify-between">
        <p>CREATED BY <span href="" class="font-semibold hover:text-purple-500">Team 10</span></p>
        <p>POWERED BY <span href="" class="font-semibold hover:text-purple-500">PHP</span></p>
      </div>
    </div>
  </footer>
</main>

<?php include("./template/footer.php") ?>