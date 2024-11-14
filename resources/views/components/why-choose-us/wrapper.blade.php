<div {{ $attributes->merge(['class' => 'hidden lg:block']) }}>
    <div class="items-center px-4 sm:flex sm:px-0 sm:py-8">
        <x-why-choose-us.reason-1></x-why-choose-us.reason-1>
    </div>

    <div class="gap-4 p-4 sm:grid sm:grid-cols-4 sm:p-0">
        <x-why-choose-us.reason-2></x-why-choose-us.reason-2>
        <x-why-choose-us.reason-3></x-why-choose-us.reason-3>
        <x-why-choose-us.reason-4></x-why-choose-us.reason-4>
        <x-why-choose-us.reason-5></x-why-choose-us.reason-5>
    </div>
</div>

<div id="controls-carousel" class="relative grid grid-cols-12 lg:hidden" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative order-2 col-span-10 h-56 overflow-hidden rounded-lg">
        <!-- Item 1 -->
        <div class="flex hidden h-full items-center p-4 duration-700 ease-in-out" data-carousel-item="active">
            <x-why-choose-us.reason-1></x-why-choose-us.reason-1>
        </div>
        <!-- Item 2 -->
        <div class="flex hidden items-center p-4 duration-700 ease-in-out">
            <x-why-choose-us.reason-2></x-why-choose-us.reason-2>
        </div>
        <!-- Item 3 -->
        <div class="flex hidden items-center p-4 duration-700 ease-in-out" data-carousel-item>
            <x-why-choose-us.reason-3></x-why-choose-us.reason-3>
        </div>
        <!-- Item 4 -->
        <div class="flex hidden items-center p-4 duration-700 ease-in-out" data-carousel-item>
            <x-why-choose-us.reason-4></x-why-choose-us.reason-4>
        </div>
        <!-- Item 5 -->
        <div class="flex hidden items-center p-4 duration-700 ease-in-out" data-carousel-item>
            <x-why-choose-us.reason-5></x-why-choose-us.reason-5>
        </div>
    </div>
    <!-- Slider controls -->
    <div class="order-1 col-span-1 flex justify-end">
        <button
            type="button"
            class="group flex h-full cursor-pointer items-center justify-center focus:outline-none"
            data-carousel-prev
        >
            <svg
                class="h-4 w-4 text-storex-red"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 6 10"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1"
                    d="M5 1 1 5l4 4"
                />
            </svg>
        </button>
    </div>
    <div class="order-3 col-span-1 flex">
        <button
            type="button"
            class="group flex h-full cursor-pointer items-center justify-center focus:outline-none"
            data-carousel-next
        >
            <svg
                class="h-4 w-4 text-storex-red"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 6 10"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1"
                    d="m1 9 4-4-4-4"
                />
            </svg>
        </button>
    </div>
</div>
