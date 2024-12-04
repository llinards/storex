<x-layout.app>

    <div class="py-8"></div>


    <!-- Flickity HTML init -->
    <div class="gallery js-flickity carousel">
        <x-products.card href="/tenta-angari">
            <x-slot name="productImage">
                {{ asset('images/placeholder-tent-1.jpg') }}
            </x-slot>
            <x-slot name="productHeading">Tenta angāri - nojumes</x-slot>
            <x-slot name="productDescription">
                Vieglās konstrukcijas tenta angāri, viegli montējami no 55 - 465 m2.
            </x-slot>
            <x-slot name="productLink">Uzzināt vairāk</x-slot>
        </x-products.card>
        <x-products.card href="/konteineru-tenta-angari">
            <x-slot name="productImage">
                {{ asset('images/placeholder-tent-1.jpg') }}
            </x-slot>
            <x-slot name="productHeading">Konteineru tenta angāri</x-slot>
            <x-slot name="productDescription">
                Platība no 36 m2. Konteineru tenta angāri ir piemēroti standarta konteineriem, kuru augstums ir 2,6 m.
            </x-slot>
            <x-slot name="productLink">Uzzināt vairāk</x-slot>
        </x-products.card>
        <x-products.card href="/industrialas-siltumnicas">
            <x-slot name="productImage">
                {{ asset('images/placeholder-tent-1.jpg') }}
            </x-slot>
            <x-slot name="productHeading">Industriālās siltumnīcas</x-slot>
            <x-slot name="productDescription">
                Platība 170 - 215 m2. Industriālās siltumnīcas profesionāļiem un iesācējiem.
            </x-slot>
            <x-slot name="productLink">Uzzināt vairāk</x-slot>
        </x-products.card>
        <x-products.card href="/aksesuari-tenta-angariem">
            <x-slot name="productImage">
                {{ asset('images/placeholder-tent-1.jpg') }}
            </x-slot>
            <x-slot name="productHeading">Aksesuāri tenta angāriem</x-slot>
            <x-slot name="productDescription">Remkomplekts angāra tentam, metāla vārti, kā papildus opcija.</x-slot>
            <x-slot name="productLink">Uzzināt vairāk</x-slot>
        </x-products.card>
    </div>



</x-layout.app>