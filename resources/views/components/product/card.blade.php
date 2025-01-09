<div class="bg-white p-4 pb-8 sm:grid sm:grid-cols-2 sm:gap-10 sm:rounded-md sm:border-1 sm:pb-0 md:p-6 lg:p-8">
    <div>
        <div id="product-card" class="product product-main" data-flickity='{"pageDots": false, "fullscreen": true }'>
            <div class="product-cell h-72 sm:h-96">
                <img
                    class="h-full w-full object-cover"
                    src=" {{ asset('images/storex-alaska-s-front-page.jpg') }}"
                    alt=""
                />
            </div>
            <div class="product-cell h-72 sm:h-96">
                <img
                    class="h-full w-full object-cover"
                    src=" {{ asset('images/storex-container-front-page.jpg') }}"
                    alt=""
                />
            </div>
            <div class="product-cell h-72 sm:h-96">
                <img
                    class="h-full w-full object-cover"
                    src=" {{ asset('images/storex-siltnamis-front-page.jpg') }}"
                    alt=""
                />
            </div>
            <div class="product-cell h-72 sm:h-96">
                <img
                    class="h-full w-full object-cover"
                    src=" {{ asset('images/storex-gyvuliams-front-page.jpg') }}"
                    alt=""
                />
            </div>
            <div class="product-cell h-72 sm:h-96">
                <img
                    class="h-full w-full object-cover"
                    src=" {{ asset('images/category-cover-image-sample.jpg') }}"
                    alt=""
                />
            </div>
        </div>

        <div
            id="product-slider"
            class="product product-nav hidden gap-10 sm:block lg:mt-8"
            data-flickity='{ "asNavFor": ".product-main", "contain": true, "pageDots": false, "prevNextButtons": false}'
        >
            <div class="product-cell flex items-center justify-center rounded-md">
                <img src=" {{ asset('images/storex-alaska-s-front-page.jpg') }}" alt="" />
            </div>
            <div class="product-cell flex items-center justify-center rounded-md">
                <img src=" {{ asset('images/storex-container-front-page.jpg') }}" alt="" />
            </div>
            <div class="product-cell flex items-center justify-center rounded-md">
                <img src=" {{ asset('images/storex-siltnamis-front-page.jpg') }}" alt="" />
            </div>
            <div class="product-cell flex items-center justify-center rounded-md">
                <img src=" {{ asset('images/storex-gyvuliams-front-page.jpg') }}" alt="" />
            </div>
            <div class="product-cell flex items-center justify-center rounded-md">
                <img src=" {{ asset('images/category-cover-image-sample.jpg') }}" alt="" />
            </div>
        </div>
    </div>

    <div>
        <h1 class="pb-4 pt-4 leading-none sm:pt-0">NORDA</h1>
        <div>
            <ul>
                <li class="grid grid-flow-col items-center justify-start pb-2">
                    <svg
                        class="icon mr-1 h-3 w-3"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 10 16"
                    >
                        <path
                            d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z"
                        />
                    </svg>
                    <p>
                        @lang('Noderīgs, ja citi modeļi nav piemēroti ierobežotās vietas dēļ')
                        .
                    </p>
                </li>
                <li class="grid grid-flow-col items-center justify-start pb-2">
                    <svg
                        class="icon mr-1 h-3 w-3"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 10 16"
                    >
                        <path
                            d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z"
                        />
                    </svg>
                    <p>
                        @lang('Liels angāra augstums, maza platība')
                        .
                    </p>
                </li>

                <li class="grid grid-flow-col items-center justify-start pb-2">
                    <svg
                        class="icon mr-1 h-3 w-3"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 10 16"
                    >
                        <path
                            d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z"
                        />
                    </svg>
                    <p>
                        @lang('Vārtu augstums 4,1m, aizķerams ar kravas automašīnu')
                        .
                    </p>
                </li>
            </ul>
        </div>
        <div>
            <p class="py-2 text-2xl text-storex-red sm:py-4 sm:text-3xl">
                <span class="font-bold">31 000€</span>
                +
                @lang('PVN')
            </p>
        </div>
        <div>
            <p class="pb-2 font-bold text-storex-inactive-grey">@lang('Modelis')</p>
            <ul>
                <li class="flex items-center pb-2">
                    <input class="input-radio" type="radio" id="norda55" name="tent-type" value="norda55" checked />
                    <label class="input-radio-label" for="norda55">
                        @lang('NORDA 55 - platība 55 m2, augstums 10m, platums 5,5m')
                    </label>
                </li>
                <li class="flex items-center pb-2">
                    <input class="input-radio" type="radio" id="norda110" name="tent-type" value="norda110" />
                    <label class="input-radio-label" for="norda110">
                        @lang('NORDA 110 - platība 110 m2, augstums 20m, platums 5,5m')
                    </label>
                </li>
            </ul>
            <div class="flex justify-center sm:justify-start">
                <x-btn href="#contact-us" class="scroll-btn my-2 flex items-center">
                    @lang('Pasūtīt')
                    <svg
                        class="ml-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="36"
                        height="28"
                        fill="#ffffff"
                        viewBox="0 0 256 256"
                    >
                        <path
                            d="M230.14,58.87A8,8,0,0,0,224,56H62.68L56.6,22.57A8,8,0,0,0,48.73,16H24a8,8,0,0,0,0,16h18L67.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,160,204a28,28,0,1,0,28-28H91.17a8,8,0,0,1-7.87-6.57L80.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,230.14,58.87ZM104,204a12,12,0,1,1-12-12A12,12,0,0,1,104,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,200,204Zm4-74.57A8,8,0,0,1,196.1,136H77.22L65.59,72H214.41Z"
                        ></path>
                    </svg>
                </x-btn>
            </div>
        </div>
        <div class="pt-2">
            <ul class="gap-2 sm:flex md:gap-6 lg:gap-8">
                <li
                    class="flex items-center border-y-1 border-storex-grey py-2 sm:w-16 sm:flex-col sm:border-y-0 sm:py-0 sm:text-center"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon mr-8 sm:mr-0"
                        width="36"
                        height="36"
                        fill="#000000"
                        viewBox="0 0 256 256"
                    >
                        <path
                            d="M120,40V16a8,8,0,0,1,16,0V40a8,8,0,0,1-16,0Zm72,88a64,64,0,1,1-64-64A64.07,64.07,0,0,1,192,128Zm-16,0a48,48,0,1,0-48,48A48.05,48.05,0,0,0,176,128ZM58.34,69.66A8,8,0,0,0,69.66,58.34l-16-16A8,8,0,0,0,42.34,53.66Zm0,116.68-16,16a8,8,0,0,0,11.32,11.32l16-16a8,8,0,0,0-11.32-11.32ZM192,72a8,8,0,0,0,5.66-2.34l16-16a8,8,0,0,0-11.32-11.32l-16,16A8,8,0,0,0,192,72Zm5.66,114.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32-11.32ZM48,128a8,8,0,0,0-8-8H16a8,8,0,0,0,0,16H40A8,8,0,0,0,48,128Zm80,80a8,8,0,0,0-8,8v24a8,8,0,0,0,16,0V216A8,8,0,0,0,128,208Zm112-88H216a8,8,0,0,0,0,16h24a8,8,0,0,0,0-16Z"
                        ></path>
                    </svg>
                    <p class="pt-2 sm:text-xs">@lang('UV aizsardzība')</p>
                </li>
                <li
                    class="flex items-center border-b-1 border-storex-grey py-2 sm:w-16 sm:flex-col sm:border-b-0 sm:py-0 sm:text-center"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon mr-8 sm:mr-0"
                        width="36"
                        height="36"
                        fill="#000000"
                        viewBox="0 0 256 256"
                    >
                        <path
                            d="M230.91,172A8,8,0,0,1,228,182.91l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,36,169.09l92,53.65,92-53.65A8,8,0,0,1,230.91,172ZM220,121.09l-92,53.65L36,121.09A8,8,0,0,0,28,134.91l96,56a8,8,0,0,0,8.06,0l96-56A8,8,0,1,0,220,121.09ZM24,80a8,8,0,0,1,4-6.91l96-56a8,8,0,0,1,8.06,0l96,56a8,8,0,0,1,0,13.82l-96,56a8,8,0,0,1-8.06,0l-96-56A8,8,0,0,1,24,80Zm23.88,0L128,126.74,208.12,80,128,33.26Z"
                        ></path>
                    </svg>
                    <p class="pt-2 sm:text-xs">@lang('4 slāņu audum')</p>
                </li>
                <li
                    class="flex items-center border-b-1 border-storex-grey py-2 sm:w-16 sm:flex-col sm:border-b-0 sm:py-0 sm:text-center"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon mr-8 sm:mr-0"
                        width="36"
                        height="36"
                        fill="#000000"
                        viewBox="0 0 256 256"
                    >
                        <path
                            d="M183.89,153.34a57.6,57.6,0,0,1-46.56,46.55A8.75,8.75,0,0,1,136,200a8,8,0,0,1-1.32-15.89c16.57-2.79,30.63-16.85,33.44-33.45a8,8,0,0,1,15.78,2.68ZM216,144a88,88,0,0,1-176,0c0-27.92,11-56.47,32.66-84.85a8,8,0,0,1,11.93-.89l24.12,23.41,22-60.41a8,8,0,0,1,12.63-3.41C165.21,36,216,84.55,216,144Zm-16,0c0-46.09-35.79-85.92-58.21-106.33L119.52,98.74a8,8,0,0,1-13.09,3L80.06,76.16C64.09,99.21,56,122,56,144a72,72,0,0,0,144,0Z"
                        ></path>
                    </svg>
                    <p class="pt-2 sm:text-xs">@lang('ES ugunsdrošības sertifikāts')</p>
                </li>
                <li
                    class="flex items-center border-b-1 border-storex-grey py-2 sm:w-16 sm:flex-col sm:border-b-0 sm:py-0 sm:text-center"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon mr-8 sm:mr-0"
                        width="36"
                        height="36"
                        fill="#000000"
                        viewBox="0 0 256 256"
                    >
                        <path
                            d="M212,56a28,28,0,1,0,28,28A28,28,0,0,0,212,56Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,212,96Zm-84,57V88a8,8,0,0,0-16,0v65a32,32,0,1,0,16,0Zm-8,47a16,16,0,1,1,16-16A16,16,0,0,1,120,200Zm40-66V48a40,40,0,0,0-80,0v86a64,64,0,1,0,80,0Zm-40,98a48,48,0,0,1-27.42-87.4A8,8,0,0,0,96,138V48a24,24,0,0,1,48,0v90a8,8,0,0,0,3.42,6.56A48,48,0,0,1,120,232Z"
                        ></path>
                    </svg>
                    <p class="pt-2 sm:pb-2 sm:text-xs md:pb-0">
                        @lang('Izturība pret temperatūras izmaiņām -30°C
                        /+50°C')
                    </p>
                </li>
                <li
                    class="flex items-center border-b-1 border-storex-grey py-2 sm:w-16 sm:flex-col sm:border-b-0 sm:py-0 sm:text-center"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon mr-8 sm:mr-0"
                        width="36"
                        height="36"
                        fill="#000000"
                        viewBox="0 0 256 256"
                    >
                        <path
                            d="M240,126.63A112.44,112.44,0,0,0,51.75,53.75a111.56,111.56,0,0,0-35.7,72.88A16,16,0,0,0,32,144h88v56a32,32,0,0,0,64,0,8,8,0,0,0-16,0,16,16,0,0,1-32,0V144h88a16,16,0,0,0,16-17.37ZM32,128l0,0a96.15,96.15,0,0,1,76.2-85.89C96.48,58,81.85,86.11,80.17,128Zm64.15,0c1.39-30.77,10.53-52.81,18.3-66.24A106.44,106.44,0,0,1,128,43.16a106.31,106.31,0,0,1,13.52,18.6C154.8,84.7,159,109.28,159.82,128Zm79.65,0c-1.68-41.89-16.31-70-28-85.94A96.07,96.07,0,0,1,224,128Z"
                        ></path>
                    </svg>
                    <p class="pt-2 sm:text-xs">@lang('Ūdensizturīgs')</p>
                </li>
            </ul>
        </div>
    </div>
</div>
