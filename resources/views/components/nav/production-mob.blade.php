<li class="py-1 sm:relative sm:hidden sm:py-0">
    <button
        id="production-mob-btn"
        class="inline-flex items-center border-b-2 border-transparent transition duration-200"
        type="button"
    >
        @lang('Produkcija')
        <svg
            id="arrow-mob-svg"
            class="ms-3 h-2.5 w-2.5 transition duration-200 group-hover:rotate-180"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 10 6"
        >
            <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m1 1 4 4 4-4"
            />
        </svg>
    </button>

    <!-- Dropdown menu -->
    <div
        id="production-mob-content"
        class="flex max-h-0 justify-center overflow-hidden opacity-0 transition-all duration-200 ease-in-out sm:absolute sm:w-44 sm:shadow"
    >
        <ul class="w-60 px-3 py-2 text-left text-sm sm:mt-0 sm:bg-white sm:shadow" aria-labelledby="production-mob-btn">
            {{ $slot }}
        </ul>
    </div>
</li>
