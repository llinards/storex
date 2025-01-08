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
