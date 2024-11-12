<h2 class="mb-8 text-center">@lang('STOREX klientu atsauksmes')</h2>

<div class="relative flex h-48 w-full items-center justify-center" data-carousel="static">
    {{ $slot }}
    <!-- Slider controls -->
    <button
        type="button"
        class="group absolute left-0 top-1/2 z-30 flex h-full -translate-y-1/2 transform cursor-pointer items-center justify-center px-4 focus:outline-none"
        data-carousel-prev
    >
        <span
            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 shadow-lg group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70"
        >
            <svg
                class="h-4 w-4 text-storex-red dark:text-gray-800 rtl:rotate-180"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 6 10"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M5 1 1 5l4 4"
                />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button
        type="button"
        class="group absolute right-0 top-1/2 z-30 flex h-full -translate-y-1/2 transform cursor-pointer items-center justify-center px-4 focus:outline-none"
        data-carousel-next
    >
        <span
            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 shadow-lg group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70"
        >
            <svg
                class="h-4 w-4 text-storex-red dark:text-gray-800 rtl:rotate-180"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 6 10"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m1 9 4-4-4-4"
                />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
