<x-layout.app>
    <div class="container flex items-center px-4 pt-24 text-storex-inactive-grey sm:mx-auto sm:pt-8 lg:px-6 xl:px-8">
        <span>@lang('Produkcija')</span>
        <span class="px-2">
            <svg
                id="arrow-svg"
                class="h-1.5 w-1.5 -rotate-90"
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
        </span>
        <span>@lang('Tenta angāri - nojumes')</span>
    </div>
    <div class="container mx-auto pb-8 pt-3 sm:pb-12 sm:pt-8 lg:px-6 xl:px-8">
        <x-product.card></x-product.card>
    </div>
</x-layout.app>
