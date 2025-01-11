<x-layout.app>
    <x-slot name="title">NORDA</x-slot>
    <x-slot name="description">TBD</x-slot>
    <x-slot name="image">{{ asset('images/storex-alaska-s-front-page.jpg') }}</x-slot>
    <div class="container mx-auto pb-8 pt-28 sm:pb-12 sm:pt-12 lg:px-6 xl:px-8">
        <x-product.card></x-product.card>
    </div>

    <div class="container mx-auto px-4 pb-8 sm:pb-12 lg:px-6 xl:px-8">
        <h2 class="pb-4 text-center">@lang('Tehniskā specifikācija')</h2>
        <x-product.pricelist-wrapper>
            <x-product.entry>
                <x-slot name="tentName">NORDA 55</x-slot>
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
                <x-slot name="tentName">NORDA 110</x-slot>
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

    <div style="background-image: url('{{ asset('images/storex-background.png') }}')" class="bg-cover bg-center">
        <div class="container mx-auto px-4 py-8 sm:py-12 lg:px-6 xl:px-8">
            <x-contact-us></x-contact-us>
        </div>
    </div>
</x-layout.app>
