<x-layout.app>
    <x-slot name="title">@lang('Cenrādis')</x-slot>
    <div class="container mx-auto px-4 pt-24 sm:pt-12 lg:px-6 xl:px-8">
        <h1 class="leading-none">@lang('Tenta angāra modeļi')</h1>
        {{-- <x-footer-link>@lang('Nospiest uz augšējās rindkopas priekš salīdzināšanas')</x-footer-link> --}}
    </div>

    <div class="container mx-auto px-4 py-8 sm:py-12 lg:px-6 xl:px-8">
        <x-product.pricelist-wrapper>
            <x-product.entry>
                <x-slot name="productName">NORDA 55</x-slot>
                <x-slot name="productLength">10</x-slot>
                <x-slot name="productWidth">5,5</x-slot>
                <x-slot name="productHeight">5,3</x-slot>
                <x-slot name="productArchDistance">2</x-slot>
                <x-slot name="productGateDimension">3,4* x 4,1</x-slot>
                <x-slot name="productArea">55</x-slot>
                <x-slot name="productPvc">650</x-slot>
                <x-slot name="productBlueprint">product/1</x-slot>
                <x-slot name="productPrice">3100€</x-slot>
            </x-product.entry>

            <x-product.entry>
                <x-slot name="productName">NORDA 110</x-slot>
                <x-slot name="productLength">20</x-slot>
                <x-slot name="productWidth">5,5</x-slot>
                <x-slot name="productHeight">5,3</x-slot>
                <x-slot name="productArchDistance">2</x-slot>
                <x-slot name="productGateDimension">3,4* x 4,1</x-slot>
                <x-slot name="productArea">110</x-slot>
                <x-slot name="productPvc">650</x-slot>
                <x-slot name="productBlueprint">product/2</x-slot>
                <x-slot name="productPrice">6200€</x-slot>
            </x-product.entry>
            <x-product.entry>
                <x-slot name="productName">NORDA 55</x-slot>
                <x-slot name="productLength">10</x-slot>
                <x-slot name="productWidth">5,5</x-slot>
                <x-slot name="productHeight">5,3</x-slot>
                <x-slot name="productArchDistance">2</x-slot>
                <x-slot name="productGateDimension">3,4* x 4,1</x-slot>
                <x-slot name="productArea">55</x-slot>
                <x-slot name="productPvc">650</x-slot>
                <x-slot name="productBlueprint">product/3</x-slot>
                <x-slot name="productPrice">3100€</x-slot>
            </x-product.entry>

            <x-product.entry>
                <x-slot name="productName">NORDA 110</x-slot>
                <x-slot name="productLength">20</x-slot>
                <x-slot name="productWidth">5,5</x-slot>
                <x-slot name="productHeight">5,3</x-slot>
                <x-slot name="productArchDistance">2</x-slot>
                <x-slot name="productGateDimension">3,4* x 4,1</x-slot>
                <x-slot name="productArea">110</x-slot>
                <x-slot name="productPvc">650</x-slot>
                <x-slot name="productBlueprint">product/4</x-slot>
                <x-slot name="productPrice">6200€</x-slot>
            </x-product.entry>
            <x-product.entry>
                <x-slot name="productName">NORDA 55</x-slot>
                <x-slot name="productLength">10</x-slot>
                <x-slot name="productWidth">5,5</x-slot>
                <x-slot name="productHeight">5,3</x-slot>
                <x-slot name="productArchDistance">2</x-slot>
                <x-slot name="productGateDimension">3,4* x 4,1</x-slot>
                <x-slot name="productArea">55</x-slot>
                <x-slot name="productPvc">650</x-slot>
                <x-slot name="productBlueprint">product/5</x-slot>
                <x-slot name="productPrice">3100€</x-slot>
            </x-product.entry>

            <x-product.entry>
                <x-slot name="productName">NORDA 110</x-slot>
                <x-slot name="productLength">20</x-slot>
                <x-slot name="productWidth">5,5</x-slot>
                <x-slot name="productHeight">5,3</x-slot>
                <x-slot name="productArchDistance">2</x-slot>
                <x-slot name="productGateDimension">3,4* x 4,1</x-slot>
                <x-slot name="productArea">110</x-slot>
                <x-slot name="productPvc">650</x-slot>
                <x-slot name="productBlueprint">product/6</x-slot>
                <x-slot name="productPrice">6200€</x-slot>
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
