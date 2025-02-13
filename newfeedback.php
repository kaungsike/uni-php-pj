<?php include("./template/header.php") ?>

<div class=" w-full h-full xl:pt-[150px] justify-center min-h-screen">

    <div class="flex xl:max-w-[900px] flex-col items-center p-6 max-sm:h-full mx-auto sm:rounded-3xl border border-neutral-300 rounded-lg sm:p-8">
        <div class="flex flex-col items-center gap-4 max-sm:flex-col-reverse">
            <h1 class="mt-4 mb-8 max-sm:hidden text-2xl font-bold">Post it</h1>
        </div>
        <form class="flex w-full flex-1 flex-col justify-between gap-6">
            <div class="space-y-1 w-full text-left">
                <div class="flex items-center justify-start gap-2">
                    <label class="text-neutral-600 text-sm leading-[150%]" for=":r3g:-form-item">
                        Feedback Title<span class="text-destructive-600">*</span>
                    </label>
                </div>
                <div class="group inline-flex h-10 w-full items-center rounded-md border border-neutral-300 p-2 text-sm transition-all duration-300">
                    <input
                        placeholder="Job Title"
                        id=":r3g:-form-item"
                        aria-describedby=":r3g:-form-item-description"
                        class="flex-1 bg-transparent placeholder:text-neutral-400 focus:outline-none"
                        value=""
                        name="name" />
                </div>
            </div>



            <div class="w-full space-y-1">
                <div class="">
                    <textarea class="w-full h-[100px] border border-neutral-300 rounded-lg outline-none focus:outline-none focus:border-neutral-300" name="" id="">

                    </textarea>
                </div>
                
            </div>

            <div class="flex flex-col items-center gap-4 sm:mt-auto sm:flex-row sm:justify-end">
                <button class="inline-flex group active:scale-95 items-center gap-2 relative bg-neutral-300 justify-center whitespace-nowrap font-bold transition-all duration-300 focus-visible:outline-none disabled:cursor-not-allowed disabled:text-neutral-500 data-[loading=&quot;true&quot;]:pointer-events-none h-[46px] px-4 py-3 text-sm rounded-xl bg-primary text-neutral-800 enabled:hover:bg-primary-400 disabled:bg-neutral-300 data-[loading=&quot;true&quot;]:bg-primary w-full max-sm:mb-8 sm:w-auto" type="submit" data-color="primary" data-variant="default">
                    <span class="inline-flex items-center gap-2 whitespace-nowrap">
                        Continue
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </form>
    </div>

</div>



<?php include("./template/footer.php") ?>