<nav {{ $attributes->merge(['class' => 'bg-white py-4 sm:px-4 lg:px-6 xl:px-8']) }}>
    <div class="mx-auto flex flex-wrap items-center justify-between">
        <a href="/" class="flex items-center">
            <img
                src="{{ asset('images/storex-logo.png') }}"
                class="max-w-[647px]:w-32 w-28 md:w-48"
                alt="Storex Logo"
            />
        </a>

        <div class="mt-4 sm:w-auto" id="navbar-multi-level">
            <ul
                class="mx-auto flex flex-col items-center bg-storex-light-grey p-4 sm:flex-row sm:space-x-8 sm:bg-inherit"
            >
                {{ $slot }}
            </ul>
        </div>
    </div>
</nav>
