<div
    class="sm:grid sm:grid-cols-2 sm:gap-10 container mx-auto px-4 sm:py-8 lg:px-6 xl:px-8 bg-white rounded-md border-1">
    <div>
        <div class="product product-main" data-flickity='{"pageDots": false}'>
            <div class="product-cell h-96">
                <img class="h-full w-full object-cover" src=" {{ asset('images/storex-alaska-s-front-page.jpg') }}"
                    alt="">
            </div>
            <div class="product-cell h-96">
                <img class="h-full w-full object-cover" src=" {{ asset('images/storex-container-front-page.jpg') }}"
                    alt="">
            </div>
            <div class="product-cell h-96">
                <img class="h-full w-full object-cover" src=" {{ asset('images/storex-siltnamis-front-page.jpg') }}"
                    alt="">
            </div>
            <div class="product-cell h-96">
                <img class="h-full w-full object-cover" src=" {{ asset('images/storex-gyvuliams-front-page.jpg') }}"
                    alt="">
            </div>
            <div class="product-cell h-96">
                <img class="h-full w-full object-cover" src=" {{ asset('images/category-cover-image-sample.jpg') }}"
                    alt="">
            </div>
        </div>

        <div id="product-slider" class="hidden sm:block product product-nav mt-8 gap-10"
            data-flickity='{ "asNavFor": ".product-main", "contain": true, "pageDots": false, "prevNextButtons": false}'>
            <div class="product-cell rounded-md flex justify-center items-center"><img
                    src=" {{ asset('images/storex-alaska-s-front-page.jpg') }}" alt=""></div>
            <div class="product-cell rounded-md flex justify-center items-center"><img
                    src=" {{ asset('images/storex-container-front-page.jpg') }}" alt=""></div>
            <div class="product-cell rounded-md flex justify-center items-center"><img
                    src=" {{ asset('images/storex-siltnamis-front-page.jpg') }}" alt=""></div>
            <div class="product-cell rounded-md flex justify-center items-center"><img
                    src=" {{ asset('images/storex-gyvuliams-front-page.jpg') }}" alt=""></div>
            <div class="product-cell rounded-md flex justify-center items-center"><img
                    src=" {{ asset('images/category-cover-image-sample.jpg') }}" alt=""></div>
        </div>
    </div>

    <div>
        <h1>NORDA</h1>
        <div>
            <ul>
                <li class="grid grid-cols-2"><svg class="icon mr-1 h-3 w-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 16">
                        <path
                            d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z" />
                    </svg>
                    <p>@lang('Noderīgs, ja citi modeļi nav piemēroti ierobežotās vietas dēļ').</p>
                </li>
                <li class="grid grid-cols-2"><svg class="icon mr-1 h-3 w-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 16">
                        <path
                            d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z" />
                    </svg>
                    <p>@lang('Liels angāra augstums, maza platība').</p>
                </li>

                <li class="grid grid-cols-2"><svg class="icon mr-1 h-3 w-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 16">
                        <path
                            d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z" />
                    </svg>
                    <p>@lang('Vārtu augstums 4,1m, aizķerams ar kravas automašīnu').</p>
                </li>
            </ul>
        </div>
        <div>
            <p class="text-storex-red text-2xl md:text-3xl"><span class="font-bold sm:text-3xl md:text-5xl">31
                    000€</span> +
                @lang('PVN')</p>
        </div>
        <div>
            <form action="">
                <p class="font-bold text-storex-inactive-grey">@lang('Modelis')</p>
                <ul>
                    <li class="flex items-center mb-2">
                        <input class="input-radio" type="radio" id="norda55" name="tent-type" value="norda55" checked>
                        <label class="input-radio-label" for="norda55">
                            @lang('NORDA 55 - platība 55 m2, augstums 10m, platums 5,5m')
                        </label>
                    </li>
                    <li class="flex items-center mb-2">
                        <input class="input-radio" type="radio" id="norda110" name="tent-type" value="norda110">
                        <label class="input-radio-label" for="norda110">
                            @lang('NORDA 110 - platība 110 m2, augstums 20m, platums 5,5m')
                        </label>
                    </li>
                </ul>
                <div class="flex flex-col items-center sm:flex sm:flex-row sm:items-left">
                    <div class="flex items-center mb-2 sm:mb-0 sm:mr-6">
                        <button id="btn-subtract" class="add-subtract-btn transition duration-200 hover:drop-shadow-md"
                            type="button">&minus;</button>
                        <input id="product-amount" class="w-10 text-center" value="0"></input>
                        <button id="btn-add" class="add-subtract-btn transition duration-200 hover:drop-shadow-md"
                            type="button">&plus;</button>
                    </div>
                    <x-btn class="flex items-center">
                        @lang('Pievienot grozam')
                        <svg class="hidden md:block ml-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                            fill="#ffffff" viewBox="0 0 256 256">
                            <path
                                d="M230.14,58.87A8,8,0,0,0,224,56H62.68L56.6,22.57A8,8,0,0,0,48.73,16H24a8,8,0,0,0,0,16h18L67.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,160,204a28,28,0,1,0,28-28H91.17a8,8,0,0,1-7.87-6.57L80.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,230.14,58.87ZM104,204a12,12,0,1,1-12-12A12,12,0,0,1,104,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,200,204Zm4-74.57A8,8,0,0,1,196.1,136H77.22L65.59,72H214.41Z">
                            </path>
                        </svg>
                    </x-btn>
                </div>
            </form>
        </div>
    </div>
</div>