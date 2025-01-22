<x-layout.app>
    <div class="container mx-auto px-4 sm:py-12 lg:px-6 xl:px-8 ">
        <h1 class="pt-28 sm:pt-0 sm:pb-12">@lang('Aksesuāri tenta angāriem ')</h1>

        <div class="hidden sm:grid xl:grid-cols-2 gap-4 sm:justify-center">
            <x-accessories.card>
                <x-slot name="gallery">gallery-a</x-slot>
            </x-accessories.card>
            <x-accessories.card>
                <x-slot name="gallery">gallery-b</x-slot>
            </x-accessories.card>
            <x-accessories.card>
                <x-slot name="gallery">gallery-c</x-slot>
            </x-accessories.card>
            <x-accessories.card>
                <x-slot name="gallery">gallery-d</x-slot>
            </x-accessories.card>
        </div>

        <div class="sm:hidden carousel mb-8" data-flickity='{ "contain": true }'>
            <x-accessories.card>
                <x-slot name="gallery">gallery-a</x-slot>
            </x-accessories.card>
            <x-accessories.card>
                <x-slot name="gallery">gallery-b</x-slot>
            </x-accessories.card>
            <x-accessories.card>
                <x-slot name="gallery">gallery-c</x-slot>
            </x-accessories.card>
            <x-accessories.card>
                <x-slot name="gallery">gallery-d</x-slot>
            </x-accessories.card>
        </div>
    </div>

    <div style="background-image: url('{{ asset('images/storex-background.png') }}')" class="bg-cover bg-center">
        <div class="container mx-auto px-4 py-8 sm:py-12 lg:px-6 xl:px-8">
            <x-contact-us></x-contact-us>
        </div>
    </div>

</x-layout.app>