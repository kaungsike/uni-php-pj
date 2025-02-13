<?php include("./template/header.php") ?>

<?php

session_start();

include("./__sql_connection.php");


if (!isset($_SESSION['id'])) {
    header("Location: signin.php");
    exit();
}

$id = $_SESSION['id'];

if (!$id) {
    echo "<script>
        alert('Invalid user id.');
        location.href = './signin.php';
    </script>";
    exit;
}

$sql = "SELECT * FROM students WHERE id=$id";

$query = mysqli_query($con, $sql);

$user = mysqli_fetch_assoc($query);

if (!$user) {
    echo "<script>
        alert('User not found.');
        location.href = './signin.php';
    </script>";
    exit;
}


?>

<?php include("./template/header.php") ?>

<div class=" w-full h-full">

    <?php include("./template/sidebar.php") ?>

    <div class="sm:ml-64">

        <?php include("./template/nav.php") ?>

        <main class="relative w-full flex-1 overflow-y-auto scroll-smooth pt-6 pb-20 max-sm:mt-16 sm:pt-8 sm:pb-[7.5rem]">
            <div class="-mt-8 h-full w-full space-y-8 flex flex-col">
                <div class="relative h-28 w-full sm:h-52">
                    <img alt="Profile Banner" loading="lazy" decoding="async" data-nimg="fill" class="w-full object-cover" src="https://www.hackquest.io/images/profile/default-background.png" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    <label class="absolute right-6 bottom-4 cursor-pointer rounded-full bg-neutral-black/60 p-1.5 text-neutral-white" data-state="closed">
                        <input accept="image/*" class="hidden" type="file">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="size-4 sm:size-[1.125rem]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                    </label>
                </div>
                <div class="space-y-8 sm:container xl:max-w-[1070px] max-sm:px-6 mx-auto">
                    <div class="-mt-4 relative">
                        <div class="sm:-top-24 -top-14 absolute left-0 size-20 rounded-full border-2 border-neutral-white bg-neutral-white sm:size-40 sm:border-4">
                            <div class="group flex size-full items-center justify-center rounded-full">
                                <span class="relative flex shrink-0 overflow-hidden rounded-full size-full">
                                    <span class="flex aspect-square h-full w-full items-center justify-center bg-neutral-100">
                                        <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 15 15" class="size-6 text-secondary-neutral sm:size-12" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.877014 7.49988C0.877014 3.84219 3.84216 0.877045 7.49985 0.877045C11.1575 0.877045 14.1227 3.84219 14.1227 7.49988C14.1227 11.1575 11.1575 14.1227 7.49985 14.1227C3.84216 14.1227 0.877014 11.1575 0.877014 7.49988ZM7.49985 1.82704C4.36683 1.82704 1.82701 4.36686 1.82701 7.49988C1.82701 8.97196 2.38774 10.3131 3.30727 11.3213C4.19074 9.94119 5.73818 9.02499 7.50023 9.02499C9.26206 9.02499 10.8093 9.94097 11.6929 11.3208C12.6121 10.3127 13.1727 8.97172 13.1727 7.49988C13.1727 4.36686 10.6328 1.82704 7.49985 1.82704ZM10.9818 11.9787C10.2839 10.7795 8.9857 9.97499 7.50023 9.97499C6.01458 9.97499 4.71624 10.7797 4.01845 11.9791C4.97952 12.7272 6.18765 13.1727 7.49985 13.1727C8.81227 13.1727 10.0206 12.727 10.9818 11.9787ZM5.14999 6.50487C5.14999 5.207 6.20212 4.15487 7.49999 4.15487C8.79786 4.15487 9.84999 5.207 9.84999 6.50487C9.84999 7.80274 8.79786 8.85487 7.49999 8.85487C6.20212 8.85487 5.14999 7.80274 5.14999 6.50487ZM7.49999 5.10487C6.72679 5.10487 6.09999 5.73167 6.09999 6.50487C6.09999 7.27807 6.72679 7.90487 7.49999 7.90487C8.27319 7.90487 8.89999 7.27807 8.89999 6.50487C8.89999 5.73167 8.27319 5.10487 7.49999 5.10487Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </span>
                                <div class="w-full overflow-hidden focus:outline-none absolute inset-0 flex items-center justify-center rounded-full bg-neutral-black/25 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <div class="relative w-full cursor-pointer h-full">
                                        <div class="w-full rounded-lg outline-dashed outline-1 duration-300 ease-in-out outline-neutral-white flex h-full items-center justify-center" role="presentation" tabindex="0">
                                            <span class="inline-flex size-8 items-center justify-center rounded-full bg-primary sm:size-12">
                                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="size-4 text-neutral-black sm:size-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 20h9"></path>
                                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <input accept="image/*,.png,.jpg,.jpeg,.webp" multiple="" tabindex="-1" class="outline-none" type="file" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start justify-between max-sm:relative sm:ml-[184px]">
                            <div class="space-y-4 max-sm:mt-10">
                                <h2 class="title-1">Kaung Sike</h2>
                                <div class="flex items-center gap-4">
                                    <a class="opacity-30" href="#">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="size-6 text-social-twitter" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                                        </svg>
                                    </a>
                                    <a class="opacity-30" href="#">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="size-6 text-social-linkedin" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
                                        </svg>
                                    </a>
                                    <a class="opacity-30" href="#">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" class="size-6 text-social-telegram" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"></path>
                                        </svg>
                                    </a>
                                    <a class="opacity-30" href="#">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" class="size-6 text-social-github" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                                        </svg>
                                    </a>
                                    <button type="button" class="outline-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r1g:" data-state="closed">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="size-6 text-social-wechat opacity-30" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M408.67 298.53a21 21 0 1 1 20.9-21 20.85 20.85 0 0 1-20.9 21m-102.17 0a21 21 0 1 1 20.9-21 20.84 20.84 0 0 1-20.9 21m152.09 118.86C491.1 394.08 512 359.13 512 319.51c0-71.08-68.5-129.35-154.41-129.35s-154.42 58.27-154.42 129.35 68.5 129.34 154.42 129.34c17.41 0 34.83-2.33 49.92-7 2.49-.86 3.48-1.17 4.64-1.17a16.67 16.67 0 0 1 8.13 2.34L454 462.83a11.62 11.62 0 0 0 3.48 1.17 5 5 0 0 0 4.65-4.66 14.27 14.27 0 0 0-.77-3.86c-.41-1.46-5-16-7.36-25.27a18.94 18.94 0 0 1-.33-3.47 11.4 11.4 0 0 1 5-9.35"></path>
                                            <path d="M246.13 178.51a24.47 24.47 0 0 1 0-48.94c12.77 0 24.38 11.65 24.38 24.47 1.16 12.82-10.45 24.47-24.38 24.47m-123.06 0A24.47 24.47 0 1 1 147.45 154a24.57 24.57 0 0 1-24.38 24.47M184.6 48C82.43 48 0 116.75 0 203c0 46.61 24.38 88.56 63.85 116.53C67.34 321.84 68 327 68 329a11.38 11.38 0 0 1-.66 4.49C63.85 345.14 59.4 364 59.21 365s-1.16 3.5-1.16 4.66a5.49 5.49 0 0 0 5.8 5.83 7.15 7.15 0 0 0 3.49-1.17L108 351c3.49-2.33 5.81-2.33 9.29-2.33a16.33 16.33 0 0 1 5.81 1.16c18.57 5.83 39.47 8.16 60.37 8.16h10.45a133.24 133.24 0 0 1-5.81-38.45c0-78.08 75.47-141 168.35-141h10.45C354.1 105.1 277.48 48 184.6 48"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 max-sm:absolute max-sm:top-0 max-sm:right-0">
                                <button type="button" class="outline-none" aria-label="Edit profile" data-state="closed">
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="size-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button type="button" class="outline-none" aria-label="Share profile" data-state="closed">
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="size-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                        <polyline points="16 6 12 2 8 6"></polyline>
                                        <line x1="12" x2="12" y1="2" y2="15"></line>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-16 sm:flex xl:w-[1070px] sm:justify-center mx-auto">
                    <div class="flex-1 space-y-8 max-sm:px-6 sm:max-w-[1136px] sm:px-8">
                        <div class="w-full space-y-6">
                            <h2 class="title-3"> Certification</h2>
                            <div class="grid gap-5 sm:grid-cols-3">
                                <div class="h-[11.5625rem] w-full rounded-lg border border-neutral-200 border-dashed sm:h-[11.75rem]"></div>
                            </div>
                        </div>
                        <div class="space-y-6">
                            <h2 class="title-3">Resume</h2>
                            <div class="grid gap-5 sm:grid-cols-3">
                                <div class="flex w-full items-center">
                                    <div class="grid w-full overflow-hidden focus:outline-none">
                                        <div class="relative w-full cursor-pointer">
                                            <div class="outline-dashed outline-1 ease-in-out outline-neutral-white flex w-full items-center justify-center gap-2.5 rounded-xl border border-neutral-300 border-dashed p-4 transition-colors duration-300 hover:border-neutral-400" role="presentation" tabindex="0">
                                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-neutral-500" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="17 8 12 3 7 8"></polyline>
                                                    <line x1="12" x2="12" y1="3" y2="15"></line>
                                                </svg>
                                                <span class="body-s text-neutral-500">Upload file</span>
                                            </div>
                                            <input accept="application/pdf,.pdf" multiple="" tabindex="-1" class="outline-none" type="file" style="display: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-6">
                            <div class="flex items-center justify-between">
                                <h2 class="title-3">Experience</h2>
                            </div>
                            <button class="inline-flex group active:scale-95 items-center gap-2 relative justify-center whitespace-nowrap font-bold transition-all duration-300 focus-visible:outline-none disabled:cursor-not-allowed data-[loading=&quot;true&quot;]:pointer-events-none h-[46px] px-4 py-3 text-sm rounded-xl border bg-neutral-50 text-neutral-800 border-neutral-600 enabled:hover:bg-neutral-200 disabled:border-neutral-300 data-[loading=&quot;true&quot;]:bg-transparent disabled:text-neutral-400 data-[loading=&quot;true&quot;]:border-neutral-600" type="button" data-color="neutral" data-variant="outline">
                                <span class="inline-flex items-center gap-2 whitespace-nowrap">
                                    Add Experience
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="size-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h2 class="title-3">Projects</h2>
                            <a href="/hackathons">
                                <button class="inline-flex group active:scale-95 items-center gap-2 relative justify-center whitespace-nowrap font-bold transition-all duration-300 focus-visible:outline-none disabled:cursor-not-allowed data-[loading=&quot;true&quot;]:pointer-events-none h-[46px] px-4 py-3 text-sm rounded-xl border bg-neutral-50 text-neutral-800 border-neutral-600 enabled:hover:bg-neutral-200 disabled:border-neutral-300 data-[loading=&quot;true&quot;]:bg-transparent disabled:text-neutral-400 data-[loading=&quot;true&quot;]:border-neutral-600" type="button" data-color="neutral" data-variant="outline">
                                    <span class="inline-flex items-center gap-2 whitespace-nowrap">
                                        Join a Hackathon
                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="size-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div data-state="collapsed" class="group relative hidden border-l border-l-neutral-200 p-3 duration-300 data-[state=collapsed]:w-0 data-[state=expanded]:w-80 sm:flex sm:items-center">
                        <button type="button" class="-left-3 absolute top-[calc(50%-0.75rem)] inline-flex size-6 items-center justify-center rounded-full border border-neutral-200 bg-neutral-white text-neutral-200 outline-none">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="size-4 duration-200 group-data-[state=expanded]:rotate-180" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="m15 18-6-6 6-6"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </main>

    </div>


</div>



<?php include("./template/footer.php") ?>










<!-- <div class="flex flex-col gap-10 md:flex-row h-screen">
  <aside class="bg-orange-100 text-black rounded-r-3xl w-[300px]  h-20 md:h-full flex md:flex-col items-center md:items-start pr-5">
    <div class="flex items-center ml-5 mt-5 justify-center md:justify-start space-x-2 mb-4 md:mb-8">
      <img src="./k.jpg" alt="Profile" class="rounded-full h-12 w-12">
      <div>
        <h1 class="text-lg font-bold"><?= $user['name'] ?></h1>
        <a href="#" class="text-sm"><?= $user['email'] ?></a>
      </div>
    </div>
    <nav class="hidden md:block w-full">
      <ul class="space-y-4">
      <li><a href="./vote.php" class="block px-5 py-2 rounded bg-orange-500 text-white duration-150 rounded-r-full">Profile</a></li>
        <li><a href="#" class="block px-5 py-2 rounded hover:bg-orange-500 hover:text-white duration-150 rounded-r-full">Dashboard</a></li>
        <li><a href="./vote.php" class="block px-5 py-2 rounded hover:bg-orange-500 hover:text-white duration-150 rounded-r-full">Vote</a></li>
        <li><a href="#" class="block px-5 py-2 rounded duration-150 rounded-r-full">Voters Guideline</a></li>
        <li><a href="#" class="block px-5 py-2 rounded hover:bg-orange-500 hover:text-white duration-150 rounded-r-full">Settings</a></li>
      </ul>
    </nav>
  </aside>

  <main class="overflow-y-auto p-4 w-full flex flex-col gap-5">
    <h1 class="xl:text-2xl text-orange-500 font-bold">
      YOU MAY NOW CAST YOUR VOTES!
    </h1>


    <div class="border border-black w-full flex-grow">


      <div class="border border-black xl:w-[250px] p-3 rounded-xl xl:h-[350px] gap-4 flex flex-col items-center justify-between">
        <div class="avatar">
          <div class="w-24 rounded-full">
            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
          </div>
        </div>

        <div class="w-full flex-grow flex flex-col items-center">
          <p class="text-xl font-bold">Su Su</p>
          <p>NO. 1</p>
          <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor minima nostrum.</p>
          <div class="flex items-center w-full justify-evenly mt-auto">
            <button class="btn btn-outline hover:bg-orange-500 hover:border-orange-500 w-full">Vote</button>
          </div>
        </div>
      </div>
    </div>
  </main>
</div> -->


<?php include("./template/footer.php") ?>