<nav class="bg-white py-4">
    <div class="mx-auto flex flex-wrap items-center justify-between">
        <a href="/" class="flex items-center">
            <img src="{{ asset('images/storex-logo.png') }}" class="w-32 sm:w-48" alt="Storex Logo" />
        </a>
        <button
            id="hamburger-menu"
            data-collapse-toggle="navbar-multi-level"
            type="button"
            class="inline-flex h-10 w-10 items-center justify-center text-sm lg:hidden"
            aria-controls="navbar-multi-level"
            aria-expanded="false"
        >
            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path
                    id="hamburger-path"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15"
                />
            </svg>
        </button>
        <div class="mt-4 hidden w-full md:w-auto lg:block" id="navbar-multi-level">
            <ul
                class="mx-auto flex flex-col items-center bg-storex-light-grey p-4 sm:bg-inherit md:flex-row md:space-x-8"
            >
                {{ $slot }}
            </ul>
        </div>
    </div>
</nav>
