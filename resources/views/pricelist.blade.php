<x-layout.app>
    <x-slot name="title">@lang('Cenrādis')</x-slot>
    <div class="container mx-auto px-4 pt-28 sm:pt-12 lg:px-6 xl:px-8">
        <h1 class="leading-none">@lang('Tenta angāra modeļi')</h1>
        {{-- <x-footer-link>@lang('Nospiest uz augšējās rindkopas priekš salīdzināšanas')</x-footer-link> --}}
    </div>

    <div class="container mx-auto px-4 py-8 sm:py-12 lg:px-6 xl:px-8">
        <x-product.pricelist-wrapper>
            <x-product.entry>
                <x-slot name="name">NORDA 55</x-slot>
                <x-slot name="length">10</x-slot>
                <x-slot name="width">5,5</x-slot>
                <x-slot name="height">5,3</x-slot>
                <x-slot name="archDistance">2</x-slot>
                <x-slot name="gateDimension">3,4* x 4,1</x-slot>
                <x-slot name="area">55</x-slot>
                <x-slot name="pvc">650</x-slot>
                <x-slot name="blueprint">product/1</x-slot>
                <x-slot name="price">3100€</x-slot>
            </x-product.entry>

            <x-product.entry>
                <x-slot name="name">NORDA 110</x-slot>
                <x-slot name="length">20</x-slot>
                <x-slot name="width">5,5</x-slot>
                <x-slot name="height">5,3</x-slot>
                <x-slot name="archDistance">2</x-slot>
                <x-slot name="gateDimension">3,4* x 4,1</x-slot>
                <x-slot name="area">110</x-slot>
                <x-slot name="pvc">650</x-slot>
                <x-slot name="blueprint">product/2</x-slot>
                <x-slot name="price">6200€</x-slot>
            </x-product.entry>
        </x-product.pricelist-wrapper>
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
