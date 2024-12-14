<!-- Navigation Container -->
<nav>
    <div
        {{
            $attributes->merge([
                'class' => 'fixed top-0 left-0 right-0 flex justify-between items-center p-4 bg-white
                    shadow-md z-50',
            ])
        }}
    >
        <a href="/">
            <img src="{{ asset('images/storex-logo.png') }}" class="w-32 sm:w-48" alt="Storex Logo" />
        </a>

        <div id="burger-icon" class="cursor-pointer sm:hidden">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8 text-storex-grey"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </div>
        <div id="close-icon" class="hidden cursor-pointer">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8 text-storex-grey"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
    </div>

    <div id="mobile-menu" class="fixed inset-0 z-40 -translate-x-full transform bg-storex-light-grey sm:hidden">
        <div class="relative h-full w-full">
            <div class="grid h-full grid-rows-12 flex-col justify-center">
                <div class="row-start-5">
                    <ul class="text-center">
                        {{ $slot }}
                    </ul>
                    <ul class="mx-20 pt-8">
                        <li class="flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="28"
                                height="28"
                                class="icon mr-2"
                                viewBox="0 0 256 256"
                            >
                                <path
                                    d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z"
                                ></path>
                            </svg>
                            <a href="https://maps.app.goo.gl/E9EtPST5AXgxRduN8" class="text-sm">
                                "Rožulejas", Plācis, Straupes
                                <br />
                                pag., Pārgaujas nov., LV-4152
                            </a>
                        </li>
                        <li class="flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="28"
                                height="28"
                                class="icon mr-2"
                                viewBox="0 0 256 256"
                            >
                                <path
                                    d="M222.37,158.46l-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L134.87,160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L97.54,33.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,32,80c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,222.37,158.46ZM176,208A128.14,128.14,0,0,1,48,80,40.2,40.2,0,0,1,82.87,40a.61.61,0,0,0,0,.12l21,47L83.2,111.86a6.13,6.13,0,0,0-.57.77,16,16,0,0,0-1,15.7c9.06,18.53,27.73,37.06,46.46,46.11a16,16,0,0,0,15.75-1.14,8.44,8.44,0,0,0,.74-.56L168.89,152l47,21.05h0s.08,0,.11,0A40.21,40.21,0,0,1,176,208Z"
                                ></path>
                            </svg>
                            <a href="tel:+37122338346" class="text-sm">+371 22338346</a>
                        </li>
                        <li class="flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="28"
                                height="28"
                                class="icon mr-2"
                                viewBox="0 0 256 256"
                            >
                                <path
                                    d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"
                                ></path>
                            </svg>
                            <a href="mailto:info@storex.lv" class="text-sm">info@storex.lv</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
