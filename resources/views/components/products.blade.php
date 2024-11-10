<div class="bg-white px-4 sm:p-0">
    <div class="flex items-center justify-between border-b-2 border-storex-light-grey">
        <h3>@lang('Tenta angāru veidi un aksesuāri')</h3>
        <a href="#" class="border-b-2 border-transparent font-bold text-storex-red hover:border-storex-red sm:text-xl">
            @lang('Skatīt
            visus')
        </a>
    </div>
    <div class="gap-10 py-4 sm:grid sm:grid-cols-4 sm:p-0 sm:py-4">
        <x-product-card>
            <x-slot name="productImage">
                {{ asset('images/placeholder-tent-1.jpg') }}
            </x-slot>
            <x-slot name="productHeading">Tenta angāri - nojumes</x-slot>
            <x-slot name="productDescription">
                Vieglās konstrukcijas tenta angāri, viegli montējami no 55 - 465 m2.
            </x-slot>
            <x-slot name="productLink">Uzzināt vairāk</x-slot>
        </x-product-card>
        <x-product-card>
            <x-slot name="productImage">
                {{ asset('images/placeholder-tent-1.jpg') }}
            </x-slot>
            <x-slot name="productHeading">Konteineru tenta angāri</x-slot>
            <x-slot name="productDescription">
                Platība no 36 m2. Konteineru tenta angāri ir piemēroti standarta konteineriem, kuru augstums ir 2,6 m.
            </x-slot>
            <x-slot name="productLink">Uzzināt vairāk</x-slot>
        </x-product-card>
        <x-product-card>
            <x-slot name="productImage">
                {{ asset('images/placeholder-tent-1.jpg') }}
            </x-slot>
            <x-slot name="productHeading">Industriālās siltumnīcas</x-slot>
            <x-slot name="productDescription">
                Platība 170 - 215 m2. Industriālās siltumnīcas profesionāļiem un iesācējiem.
            </x-slot>
            <x-slot name="productLink">Uzzināt vairāk</x-slot>
        </x-product-card>
        <x-product-card>
            <x-slot name="productImage">
                {{ asset('images/placeholder-tent-1.jpg') }}
            </x-slot>
            <x-slot name="productHeading">Aksesuāri tenta angāriem</x-slot>
            <x-slot name="productDescription">Remkomplekts angāra tentam, metāla vārti, kā papildus opcija.</x-slot>
            <x-slot name="productLink">Uzzināt vairāk</x-slot>
        </x-product-card>
    </div>
</div>