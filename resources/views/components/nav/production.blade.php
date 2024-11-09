<li class="py-1 sm:py-0">
    <button
        id="production-btn"
        data-dropdown-toggle="production-hover"
        data-dropdown-delay="200"
        data-dropdown-trigger="hover"
        class="inline-flex items-center border-b-2 border-transparent hover:border-storex-red hover:text-storex-red"
        type="button"
    >
        @lang('Produkcija')
        <svg
            class="ms-3 h-2.5 w-2.5"
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
    <div id="production-hover" class="hidden w-44 bg-white px-3 py-2 shadow dark:bg-storex-grey">
        <ul class="py-2 text-sm" aria-labelledby="production-btn">
            {{ $slot }}
        </ul>
    </div>
</li>
