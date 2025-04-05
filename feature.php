<?php include("./template/header.php") ?>

<main class="flex flex-col min-h-screen">
  <section class="w-full h-[70px] flex items-center justify-center">
    <div class="h-[50px] border w-[400px]  xl:w-[500px] rounded-full flex items-center justify-between px-1.5">

      <a href="./index.php" class="py-2.5 px-5 text-sm font-medium text-gray-900 border-none focus:outline-none bg-white border border-gray-200  focus:z-10 focus:ring-4 rounded-full focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Home</a>

      <a href="./feature.php" class="py-2.5 px-5 text-sm font-medium text-gray-900 border-none focus:outline-none bg-gray-200 border border-gray-200 focus:z-10 focus:ring-4 rounded-full focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Feature</a>


      <a href="./signin.php" type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 m-0">Get Start</a>

    </div>
  </section>

  <div class="max-sm:mb-12 sm:py-16">
    <section class="container max-sm:px-6 mx-auto">
      <div class="flex flex-col items-center pt-8 pb-12 sm:pb-16">
        <h2 class="text-center text-2xl sm:text-5xl uppercase leading-8 sm:leading-[3rem] text-neutral-black font-bold [font-family:var(--font-hy-pixel)]">
        "What You Can Do With Student Feedback"
        </h2>
        <p class="body-m mt-6 text-secondary-neutral max-sm:hidden text-center">
        Discover the tools designed to give you control over your academic journey.
        </p>
      </div>

      <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
        <div class="h-full">
          <a href="/co-learning" target="_blank" rel="noopener noreferrer">
            <div class="flex flex-col h-full border border-neutral-200 bg-neutral-white rounded-3xl p-8 transition-colors duration-300 hover:bg-neutral-100">
              <h4 class="title-4 font-semibold text-lg">Speak Your Mind Freely</h4>
              <p class="body-s my-6 text-sm text-neutral-600">Students can submit honest feedback on their classes, teachers, and campus life — because every voice matters in building a better learning experience.</p>
              <div class="mt-auto">
                <div class="flex items-center justify-center  w-full">
                  <img src="./undraw_feed.svg" alt="Co-learning Camps" class="w-[280px] inset-0 h-[80%] object-cover rounded-xl" loading="lazy" />
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="h-full">
          <a href="/events" target="_blank" rel="noopener noreferrer">
            <div class="flex flex-col h-full border border-neutral-200 bg-neutral-white rounded-3xl p-8 transition-colors duration-300 hover:bg-neutral-100">
              <h4 class="title-4 font-semibold text-lg">Support & Reflect Together</h4>
              <p class="body-s my-6 text-sm text-neutral-600">Join a culture of shared growth by reading and responding to feedback from your peers. Whether it’s encouragement or constructive thoughts, every comment counts.</p>
              <div class="mt-auto">
                <div class="flex items-center justify-center w-full">
                  <img src="./undraw_like.svg" alt="Global Events" class=" inset-0 w-[280px] object-cover rounded-xl" loading="lazy" />
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="h-full">
          <a href="/events" target="_blank" rel="noopener noreferrer">
            <div class="flex flex-col h-full border border-neutral-200 bg-neutral-white rounded-3xl p-8 transition-colors duration-300 hover:bg-neutral-100">
              <h4 class="title-4 font-semibold text-lg">From Feedback to Action</h4>
              <p class="body-s my-6 text-sm text-neutral-600">Admins review submissions and forward them to student affairs. Your insights fuel real improvements — turning thoughts into meaningful changes on campus.</p>
              <div class="mt-auto">
                <div class="flex items-center justify-center w-full relative">
                  <img src="./undraw_send.svg" alt="Advocate Program" class="inset-0 w-[280px] object-cover rounded-xl" loading="lazy" />
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>
  </div>





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