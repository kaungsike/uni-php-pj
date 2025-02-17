<?php include("./template/student_header.php") ?>

<div class=" w-full h-full">

    <?php include("./template/student_sidebar.php") ?>

    <div class="sm:ml-64">

    <?php include("./template/student_nav.php") ?>

        <main class="w-full flex items-center">
            <div class="group sm:container mx-auto max-w-[1150px]">
                <div class="flex w-full justify-between gap-8 max-sm:pb-6 sm:py-8">
                    <div class="flex flex-1 flex-shrink-0 flex-col gap-6">
                        <h1 class="title-1 text-neutral-800">Free Testnet Faucet</h1>
                        <p class="body-m text-neutral-500">Access to free testnet tokens from various blockchains for your project.</p>
                        <div class="w-fit">
                            <div class="flex gap-4 max-sm:flex-col">
                                <div class="sm:min-w-[253px]">
                                    <div class="flex items-center">
                                        <div class="headline-xs flex h-4 w-4 items-center justify-center rounded-full bg-primary">1</div>
                                        <p class="headline-s pl-3 text-primary-neutral">Choose a Faucet</p>
                                    </div>
                                    <div class="body-s pt-2 text-secondary-neutral ">
                                        <p>Choose a testnet you request for test tokens</p>
                                    </div>
                                </div>
                                <div class="sm:min-w-[253px]">
                                    <div class="flex items-center">
                                        <div class="headline-xs flex h-4 w-4 items-center justify-center rounded-full bg-primary">2</div>
                                        <p class="headline-s pl-3 text-primary-neutral">Complete Your Profile</p>
                                    </div>
                                    <div class="body-s pt-2 text-secondary-neutral ">
                                        <p>We require a completion of HackQuest Profile to prevent misuse</p>
                                    </div>
                                </div>
                                <div class="sm:min-w-[253px]">
                                    <div class="flex items-center">
                                        <div class="headline-xs flex h-4 w-4 items-center justify-center rounded-full bg-primary">3</div>
                                        <p class="headline-s pl-3 text-primary-neutral">Receive Tokens</p>
                                    </div>
                                    <div class="body-s pt-2 text-secondary-neutral ">
                                        <p>You will receive test tokens in seconds with your address</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative max-sm:hidden w-[323px] h-[200px]"><img alt="Free Testnet Faucet" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="https://www.hackquest.io/images/layout/faucet_cover.png"></div>
                </div>
                <div>
                    <div class="max-sm:mt-6 sm:hidden">
                        <button class="inline-flex h-10 items-center justify-between gap-2 rounded-lg bg-neutral-100 px-3 py-2 outline-none transition-colors duration-300 aria-expanded:bg-neutral-800 aria-expanded:text-neutral-50 min-w-44" type="button" id="radix-:R4kvffafhhclfja:" aria-haspopup="menu" aria-expanded="false" data-state="closed">
                            <span class="whitespace-nowrap font-bold text-sm">All</span>
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="size-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div data-orientation="horizontal" role="none" class="shrink-0 bg-neutral-200 h-px w-full mt-4 mb-6 sm:mb-8"></div>
                <!--$-->
                <div class="grid grid-cols-1 gap-4 group-has-[[data-pending]]:pointer-events-none group-has-[[data-pending]]:animate-pulse sm:grid-cols-3">
                    <a href="/faucets/5003">
                        <div class="border border-neutral-200 bg-neutral-white transition-colors duration-300 hover:bg-neutral-100 rounded-xl p-6">
                            <div class="self-start p-2"><span class="relative flex shrink-0 overflow-hidden size-12 rounded-full"><img class="aspect-square h-full w-full" alt="Mantle Sepolia Testnet" src="https://assets.hackquest.io/faucets/5003/fe24691c-14ce-4de6-85a8-ef123fe1018a.svg"></span></div>
                            <div class="title-6 py-4 text-neutral-800">
                                <p>Mantle Sepolia Testnet</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="body-xs text-neutral-500">Faucet</p>
                                    <p class="body-s text-neutral-800">
                                        Drips<!-- --> <!-- -->4 MNT
                                    </p>
                                </div>
                                <div>
                                    <p class="body-xs text-neutral-500">Stash</p>
                                    <p class="body-s text-neutral-800">99779394.807 MNT</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/faucets/1320">
                        <div class="border border-neutral-200 bg-neutral-white transition-colors duration-300 hover:bg-neutral-100 rounded-xl p-6">
                            <div class="self-start p-2"><span class="relative flex shrink-0 overflow-hidden size-12 rounded-full"><img class="aspect-square h-full w-full" alt="AIA Testnet" src="https://assets.hackquest.io/faucets/1320/aa9b0306-6f70-4fa0-a2fa-1b69d0fdd74b.png"></span></div>
                            <div class="title-6 py-4 text-neutral-800">
                                <p>AIA Testnet</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="body-xs text-neutral-500">Faucet</p>
                                    <p class="body-s text-neutral-800">
                                        Drips<!-- --> <!-- -->500 AIA
                                    </p>
                                </div>
                                <div>
                                    <p class="body-xs text-neutral-500">Stash</p>
                                    <p class="body-s text-neutral-800">364942.9 AIA</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/faucets/12227332">
                        <div class="border border-neutral-200 bg-neutral-white transition-colors duration-300 hover:bg-neutral-100 rounded-xl p-6">
                            <div class="self-start p-2"><span class="relative flex shrink-0 overflow-hidden size-12 rounded-full"><img class="aspect-square h-full w-full" alt="Neo X Testnet T4" src="https://assets.hackquest.io/faucets/12227332/e74e112e-9304-4ae6-b1e5-b022cbbd7981.png"></span></div>
                            <div class="title-6 py-4 text-neutral-800">
                                <p>Neo X Testnet T4</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="body-xs text-neutral-500">Faucet</p>
                                    <p class="body-s text-neutral-800">
                                        Drips<!-- --> <!-- -->1 GAS
                                    </p>
                                </div>
                                <div>
                                    <p class="body-xs text-neutral-500">Stash</p>
                                    <p class="body-s text-neutral-800">261.424 GAS</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/faucets/656476">
                        <div class="border border-neutral-200 bg-neutral-white transition-colors duration-300 hover:bg-neutral-100 rounded-xl p-6">
                            <div class="self-start p-2"><span class="relative flex shrink-0 overflow-hidden size-12 rounded-full"><img class="aspect-square h-full w-full" alt="EDU Chain Testnet" src="https://assets.hackquest.io/faucets/656476/71d06d79-4402-4224-985c-ed8368f8f061.png"></span></div>
                            <div class="title-6 py-4 text-neutral-800">
                                <p>EDU Chain Testnet</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="body-xs text-neutral-500">Faucet</p>
                                    <p class="body-s text-neutral-800">
                                        Drips<!-- --> <!-- -->0.5 EDU
                                    </p>
                                </div>
                                <div>
                                    <p class="body-xs text-neutral-500">Stash</p>
                                    <p class="body-s text-neutral-800">1488.012 EDU</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/faucets/534351">
                        <div class="border border-neutral-200 bg-neutral-white transition-colors duration-300 hover:bg-neutral-100 rounded-xl p-6">
                            <div class="self-start p-2"><span class="relative flex shrink-0 overflow-hidden size-12 rounded-full"><img class="aspect-square h-full w-full" alt="Scroll Sepolia Testnet" src="https://assets.hackquest.io/faucets/534351/427d94d7-9d27-4c19-ab2e-6bf75e6317b0.png"></span></div>
                            <div class="title-6 py-4 text-neutral-800">
                                <p>Scroll Sepolia Testnet</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="body-xs text-neutral-500">Faucet</p>
                                    <p class="body-s text-neutral-800">
                                        Drips<!-- --> <!-- -->0.001 ETH
                                    </p>
                                </div>
                                <div>
                                    <p class="body-xs text-neutral-500">Stash</p>
                                    <p class="body-s text-neutral-800">47.901 ETH</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/faucets/421614">
                        <div class="border border-neutral-200 bg-neutral-white transition-colors duration-300 hover:bg-neutral-100 rounded-xl p-6">
                            <div class="self-start p-2"><span class="relative flex shrink-0 overflow-hidden size-12 rounded-full"><img class="aspect-square h-full w-full" alt="Arbitrum Sepolia" src="https://assets.hackquest.io/faucets/421614/fd62f28d-08a5-47bc-a8f3-83d499b8a6bb.png"></span></div>
                            <div class="title-6 py-4 text-neutral-800">
                                <p>Arbitrum Sepolia</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="body-xs text-neutral-500">Faucet</p>
                                    <p class="body-s text-neutral-800">
                                        Drips<!-- --> <!-- -->0.001 ETH
                                    </p>
                                </div>
                                <div>
                                    <p class="body-xs text-neutral-500">Stash</p>
                                    <p class="body-s text-neutral-800">0.053 ETH</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/faucets/41454">
                        <div class="border border-neutral-200 bg-neutral-white transition-colors duration-300 hover:bg-neutral-100 rounded-xl p-6">
                            <div class="self-start p-2"><span class="relative flex shrink-0 overflow-hidden size-12 rounded-full"><img class="aspect-square h-full w-full" alt="Monad Devnet" src="https://assets.hackquest.io/faucets/41454/5bef65b6-3706-4759-90af-3cabcefc6e96.jpeg"></span></div>
                            <div class="title-6 py-4 text-neutral-800">
                                <p>Monad Devnet</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="body-xs text-neutral-500">Faucet</p>
                                    <p class="body-s text-neutral-800">
                                        Drips<!-- --> <!-- -->0.5 MON
                                    </p>
                                </div>
                                <div>
                                    <p class="body-xs text-neutral-500">Stash</p>
                                    <p class="body-s text-neutral-800">297.993 MON</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/faucets/59141">
                        <div class="border border-neutral-200 bg-neutral-white transition-colors duration-300 hover:bg-neutral-100 rounded-xl p-6">
                            <div class="self-start p-2"><span class="relative flex shrink-0 overflow-hidden size-12 rounded-full"><img class="aspect-square h-full w-full" alt="Linea Sepolia" src="https://assets.hackquest.io/faucets/59141/c70cc608-5a40-4b51-a57b-e24c09507f8c.webp"></span></div>
                            <div class="title-6 py-4 text-neutral-800">
                                <p>Linea Sepolia</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="body-xs text-neutral-500">Faucet</p>
                                    <p class="body-s text-neutral-800">
                                        Drips<!-- --> <!-- -->0.001 ETH
                                    </p>
                                </div>
                                <div>
                                    <p class="body-xs text-neutral-500">Stash</p>
                                    <p class="body-s text-neutral-800">86.881 ETH</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>


</div>



<?php include("./template/footer.php") ?>