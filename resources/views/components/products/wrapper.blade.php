<div class="hidden bg-white px-4 sm:p-0 sm:block">
    <div class="flex items-center justify-between border-b-2 border-storex-light-grey">
        <h3>@lang('Tenta angāru veidi un aksesuāri')</h3>
        <a href="/products"
            class="border-b-2 border-transparent font-bold text-storex-red hover:border-storex-red sm:text-lg md:text-xl">
            @lang('Skatīt
            visus')
        </a>
    </div>
    <div class="gap-10 sm:p-0 sm:py-4 sm:grid sm:grid-cols-2 lg:grid-cols-4">
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
</div>

<div id="controls-carousel" class="grid grid-cols-12 sm:hidden " data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative order-2 col-span-10 h-104 overflow-hidden rounded-lg">
        <!-- Item 1 -->
        <div class="flex hidden items-center p-4 duration-300 ease-in-out" data-carousel-item="active">
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
        </div>
        <!-- Item 2 -->
        <div class="flex hidden items-center p-4 duration-300 ease-in-out">
            <x-products.card href="/konteineru-tenta-angari">
                <x-slot name="productImage">
                    {{ asset('images/placeholder-tent-1.jpg') }}
                </x-slot>
                <x-slot name="productHeading">Konteineru tenta angāri</x-slot>
                <x-slot name="productDescription">
                    Platība no 36 m2. Konteineru tenta angāri ir piemēroti standarta konteineriem, kuru augstums ir 2,6
                    m.
                </x-slot>
                <x-slot name="productLink">Uzzināt vairāk</x-slot>
            </x-products.card>
        </div>
        <!-- Item 3 -->
        <div class="flex hidden items-center p-4 duration-300 ease-in-out" data-carousel-item>
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
        </div>
        <!-- Item 4 -->
        <div class="flex hidden items-center p-4 duration-300 ease-in-out" data-carousel-item>
            <x-products.card href="/aksesuari-tenta-angariem">
                <x-slot name="productImage">
                    {{ asset('images/placeholder-tent-1.jpg') }}
                </x-slot>
                <x-slot name="productHeading">Aksesuāri tenta angāriem</x-slot>
                <x-slot name="productDescription">Remkomplekts angāra tentam, metāla vārti, kā papildus opcija.</x-slot>
                <x-slot name="productLink">Uzzināt vairāk</x-slot>
            </x-products.card>
        </div>
    </div>
    <!-- Slider controls -->
    <div class="order-1 col-span-1 flex justify-end">
        <button type="button" class="group flex h-full cursor-pointer items-center justify-center focus:outline-none"
            data-carousel-prev>
            <svg class="h-4 w-4 text-storex-red" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M5 1 1 5l4 4" />
            </svg>
        </button>
    </div>
    <div class="order-3 col-span-1 flex">
        <button type="button" class="group flex h-full cursor-pointer items-center justify-center focus:outline-none"
            data-carousel-next>
            <svg class="h-4 w-4 text-storex-red" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="m1 9 4-4-4-4" />
            </svg>
        </button>
    </div>
</div>