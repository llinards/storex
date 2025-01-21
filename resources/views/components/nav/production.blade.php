{{-- DESKTOP VIEW --}}
<li class="group hidden py-1 sm:relative sm:block sm:py-0">
    <button id="production-btn"
        class="inline-flex items-center border-b-2 border-transparent transition duration-200 group-hover:border-storex-red group-hover:text-storex-red"
        type="button">
        @lang('Produkcija')
        <svg id="arrow-svg" class="ms-3 h-2.5 w-2.5 transition duration-200 group-hover:rotate-180" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
        </svg>
    </button>

    <!-- Dropdown menu -->
    <div id="production-content"
        class="flex max-h-0 justify-center overflow-hidden opacity-0 transition-all duration-200 ease-in-out group-hover:max-h-screen group-hover:opacity-100 sm:absolute sm:w-44 sm:shadow">
        <ul class="w-60 px-3 py-2 text-left text-sm sm:mt-0 sm:bg-white sm:shadow" aria-labelledby="production-btn">
            {{ $slot }}
        </ul>
    </div>
</li>

{{-- MOBILE VIEW --}}
<li class="py-1 sm:relative sm:hidden sm:py-0">
    <button id="production-mob-btn"
        class="inline-flex items-center border-b-2 border-transparent transition duration-200" type="button">
        @lang('Produkcija')
        {{-- <svg id="arrow-mob-svg" class="ms-3 h-2.5 w-2.5 transition duration-200 group-hover:rotate-180"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
        </svg> --}}

        <svg id="arrow-mob-svg" class="sm:hidden icon ml-1 h-3 w-3 rotate-90 transition duration-200" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 16">
            <path d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z" />
        </svg>

    </button>

    <!-- Dropdown menu -->
    <div id="production-mob-content"
        class="flex max-h-0 justify-left overflow-hidden opacity-0 transition-all duration-200 ease-in-out sm:absolute sm:w-44 sm:shadow">
        <ul class="w-60 px-3 py-2 text-left text-sm sm:mt-0 sm:bg-white sm:shadow" aria-labelledby="production-mob-btn">
            {{ $slot }}
        </ul>
    </div>
</li>