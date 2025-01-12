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
                class="h-8 w-8 text-storex-grey transition-all duration-200"
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
                class="h-8 w-8 text-storex-grey transition-all duration-200"
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
            <div class="flex h-full flex-col items-center justify-center">
                <ul class="text-center">
                    {{ $slot }}
                </ul>
            </div>
        </div>
    </div>
</nav>
