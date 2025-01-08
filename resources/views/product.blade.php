<x-layout.app>
    <div class="container mx-auto pb-8 pt-28 sm:pb-12 sm:pt-12 lg:px-6 xl:px-8">
        <x-product.card></x-product.card>
    </div>

    <div class="container mx-auto px-4 pb-8 sm:pb-12 lg:px-6 xl:px-8">
        <h2 class="pb-4 text-center">@lang('Tehniskā specifikācija')</h2>
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
        </x-product.pricelist-wrapper>
    </div>

    <div style="background-image: url('{{ asset('images/storex-background.png') }}')" class="bg-cover bg-center">
        <div class="container mx-auto px-4 py-8 sm:py-12 lg:px-6 xl:px-8">
            <x-contact-us></x-contact-us>
        </div>
    </div>
</x-layout.app>
