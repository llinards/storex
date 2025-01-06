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
        <span>@lang('Cenrādis')</span>
    </div>

    <div class="container mx-auto px-4 lg:px-6 xl:px-8">
        <h1 class="py-4 leading-none">@lang('Tenta angāra modeļi')</h1>
        <x-footer-link>@lang('Nospiest uz augšējās rindkopas priekš salīdzināšanas')</x-footer-link>
    </div>

    <div class="container mx-auto px-4 py-8 sm:py-12 lg:px-6 xl:px-8">
        <x-product.specifications></x-product.specifications>
    </div>

    <div class="container mx-auto px-4 pb-8 sm:pb-12 lg:px-6 xl:px-8">
        <div class="border-t-1 pt-4">
            <x-footer-link>
                *
                @lang('Augustums virs konteinera.')
            </x-footer-link>
            <x-footer-link>
                **
                @lang('Cena norādīta bez vārtiem.')
            </x-footer-link>
            <p class="py-2 font-bold">
                @lang('Papildus opcija')
                :
            </p>
            <x-footer-link>
                <span class="text-storex-red">
                    @lang('Aizmugurējais panelis')
                    €500
                </span>
                +
                @lang('PVN')
            </x-footer-link>
            <x-footer-link>
                <span class="text-storex-red">@lang('Priekšējais panelis')</span>
                @lang('ar iestrādātiem
                vārtiem')
                <span class="text-storex-red">€550</span>
                2.6x3.1 +
                @lang('PVN')
            </x-footer-link>
        </div>
    </div>
</x-layout.app>
