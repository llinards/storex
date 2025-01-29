<x-layout.app>
    <div class="container mx-auto px-4 pb-8 sm:py-12 lg:px-6 xl:px-8">

        {{-- PHOTO GALLERY --}}
        <div class="pb-8 pt-28 sm:pb-8 sm:pt-0">
            <h1 class="sm:border-b-1 sm:pb-4">@lang('Foto galerija')</h1>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-4 sm:gap-8">
            <x-gallery.card>
                <x-slot name="productName">NORDA</x-slot>
                <x-slot name="imageOne">{{asset('images/storex-facilities.jpg')}}</x-slot>
                <x-slot name="gallery">gallery-a</x-slot>

                <x-slot name="imageTwo">{{ asset('images/storex-container-front-page.jpg') }}</x-slot>
                <x-slot name="imageThree">{{ asset('images/category-cover-image-sample.jpg') }}</x-slot>
            </x-gallery.card>
            <x-gallery.card>
                <x-slot name="productName">MARCO</x-slot>
                <x-slot name="imageOne">{{asset('images/storex-siltnamis-front-page.jpg')}}</x-slot>
                <x-slot name="gallery">gallery-b</x-slot>

                <x-slot name="imageTwo">{{ asset('images/storex-background.png') }}</x-slot>
                <x-slot name="imageThree">{{ asset('images/placeholder-tent-1.jpg') }}</x-slot>
            </x-gallery.card>
            <x-gallery.card>
                <x-slot name="productName">KONTEINERU TENTA ANGĀRI</x-slot>
                <x-slot name="imageOne">{{asset('images/storex-gyvuliams-front-page.jpg')}}</x-slot>
                <x-slot name="gallery">gallery-c</x-slot>

                <x-slot name="imageTwo">{{ asset('images/storex-logo.png') }}</x-slot>
                <x-slot name="imageThree">{{ asset('images/storex-owners.jpg') }}</x-slot>
            </x-gallery.card>
            <x-gallery.card>
                <x-slot name="productName">EURO EXTREME</x-slot>
                <x-slot name="imageOne">{{asset('images/storex-container-front-page.jpg')}}</x-slot>
                <x-slot name="gallery">gallery-d</x-slot>

                <x-slot name="imageTwo">{{ asset('images/placeholder-tent-1.jpg') }}</x-slot>
                <x-slot name="imageThree">{{ asset('images/storex-container-front-page.jpg') }}</x-slot>
            </x-gallery.card>
        </div>

        {{-- VIDEO GALLERY --}}
        <div class="pb-8 pt-8 sm:pt-12 sm:pb-8">
            <h2 class="sm:border-b-1 sm:pb-4">@lang('Video galerija')</h2>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-4 sm:gap-8">
            <div class="flex justify-center">
                <div class="h-96 w-full sm:w-96">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/Us3W9k3bf_c?si=sdKfQ8M5HTwdBbrb"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="h-96 w-full sm:w-96">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/RvNz-fmQtZs?si=Sn7oc11kag7KzJcf"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="h-96 w-full sm:w-96">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/NfumNw9E8W4?si=A5kf897hiVTYdq_G"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="h-96 w-full sm:w-96">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/uvvbK5g4HV0?si=PU9_k8LagOQcKk6E"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="h-96 w-full sm:w-96">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/th9MMTbxmSY?si=W_6LB8pEqEDkMUGB"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="h-96 w-full sm:w-96">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/CVktRw2Y8uk?si=G1h3sqE-QJ9ARKOs"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="h-96 w-full sm:w-96">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/6cWCKLbZZa0?si=xJBo5mr4ymMh2gtG"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>



    </div>
</x-layout.app>