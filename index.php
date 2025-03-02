<?php include("./template/header.php") ?>

<main class="flex flex-col min-h-screen">
<section class="w-full h-[70px] flex items-center justify-center">
   <div class="h-[50px] border  w-[500px] rounded-full flex items-center justify-between px-1.5">

   <button type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
<svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
<path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
</svg>
<span class="sr-only">Icon description</span>
</button>

   <button type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 border-none focus:outline-none bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 rounded-full focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Guide</button>

   <button type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 border-none focus:outline-none bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 rounded-full focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Feature</button>

   <button type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 border-none focus:outline-none bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 rounded-full focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Why</button>

   <a href="./explore.php" type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 m-0">Get Start</a>

   </div>
</section>

<section class="w-full h-[280px] flex flex-col items-center justify-center">
   <h2 class="text-[110px]">
      Feedback? 👋
   </h2>
   <p class="text-center">Messenger is more than just a messaging platform it'syour gateway to  <br> seamless communication and collaboration.</p>
</section>

<footer class="bg-white py-10 px-6 md:px-12 lg:px-20 border-t mt-auto">
  <div class="max-w-[1284px] mx-auto flex flex-col md:flex-row md:justify-between items-center md:items-start">
    <div class="text-center md:text-left mb-6 md:mb-0">
      <div class="flex justify-center md:justify-start items-center gap-2">
        <div class="bg-gradient-to-r from-purple-400 to-pink-400 p-3 rounded-lg">
          <span class="text-white font-bold text-xl">⚡</span>
        </div>
      </div>
      <p class="mt-4 text-gray-700">Join for free career tips!</p>
      <div class="mt-4 flex items-center gap-2">
        <input type="email" placeholder="Email@example.com" class="px-4 py-2 border rounded-md w-64 focus:outline-none focus:ring-2 focus:ring-purple-500">
        <button class="bg-purple-500 text-white px-4 py-2 rounded-md hover:bg-purple-600">Sign up</button>
      </div>
      <div class="flex justify-center md:justify-start mt-4 space-x-4">
        <a href="#" class="text-gray-700 hover:text-purple-500">📷</a>
        <a href="#" class="text-gray-700 hover:text-purple-500">🐦</a>
        <a href="#" class="text-gray-700 hover:text-purple-500">✉️</a>
      </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 text-center md:text-left">
      <div>
        <h3 class="font-semibold text-gray-900">Company</h3>
        <ul class="mt-2 space-y-2 text-gray-700">
          <li><a href="#" class="hover:text-purple-500">Product</a></li>
          <li><a href="#" class="hover:text-purple-500">Features</a></li>
          <li><a href="#" class="hover:text-purple-500">Power</a></li>
          <li><a href="#" class="hover:text-purple-500">Pricing</a></li>
        </ul>
      </div>
      <div>
        <h3 class="font-semibold text-gray-900">Social media</h3>
        <ul class="mt-2 space-y-2 text-gray-700">
          <li><a href="#" class="hover:text-purple-500">Instagram</a></li>
          <li><a href="#" class="hover:text-purple-500">Facebook</a></li>
          <li><a href="#" class="hover:text-purple-500">LinkedIn</a></li>
          <li><a href="#" class="hover:text-purple-500">Twitter</a></li>
        </ul>
      </div>
      <div>
        <h3 class="font-semibold text-gray-900">Webflow stuff</h3>
        <ul class="mt-2 space-y-2 text-gray-700">
          <li><a href="#" class="hover:text-purple-500">Style Guide</a></li>
          <li><a href="#" class="hover:text-purple-500">Licensing</a></li>
          <li><a href="#" class="hover:text-purple-500">Instructions</a></li>
          <li><a href="#" class="hover:text-purple-500">Change Log</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="w-full flex text-gray-600 justify-center border-t pt-4">
<div class="xl:w-[1284px] flex items-center justify-between">
<p>CREATED BY <a href="#" class="font-semibold hover:text-purple-500">OVERSIGHT</a></p>
<p>POWERED BY <a href="#" class="font-semibold hover:text-purple-500">WEBFLOW</a></p>
</div>
  </div>
</footer>
</main>

<?php include("./template/footer.php") ?>