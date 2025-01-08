<x-layout.app>
    <div class="container mx-auto px-4 sm:py-12 lg:px-6 xl:px-8">
        <div class="pt-28 sm:pb-12 sm:pt-0">
            <h1 class="pt-2 leading-none">@lang('Produkcija')</h1>
        </div>

        {{-- DESKTOP LAYOUT --}}
        <div class="hidden sm:block">
            {{--
                @if ($categories->isEmpty())
                <div class="mt-3 flex items-center justify-center">
                <p>
                @lang('Kategorijas nav atrastas')
                .
                </p>
                </div>
                @else
            --}}
            <div class="gap-10 sm:grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <x-category.card
                    href="{{route('product.show', ['category' => request()->route('category'), 'product' => 'produkts-demo'])}}">
                    <x-slot name="productImage">
                        {{ asset('images/storex-alaska-s-front-page.jpg') }}
                    </x-slot>
                    <x-slot name="productHeading">NORDA</x-slot>
                    <x-slot name="area">Platība 56 - 84 m2</x-slot>
                    <x-slot name="width">Platums 7 m</x-slot>
                    <x-slot name="height">Augstums 4,8 m</x-slot>
                    <x-slot name="length">Garums ?</x-slot>
                    <x-slot name="gate">Vārti: attīšanas veids no abiem galiem, platums 3,7 m un augstums 3,5 m</x-slot>
                    <x-slot name="productLink">@lang('Uzzināt vairāk')</x-slot>
                </x-category.card>
                <x-category.card
                    href="{{route('product.show', ['category' => request()->route('category'), 'product' => 'produkts-demo'])}}">
                    <x-slot name="productImage">
                        {{ asset('images/storex-container-front-page.jpg') }}
                    </x-slot>
                    <x-slot name="productHeading">NORDA</x-slot>
                    <x-slot name="area">Platība 56 - 84 m2</x-slot>
                    <x-slot name="width">Platums 7 m</x-slot>
                    <x-slot name="height">Augstums 4,8 m</x-slot>
                    <x-slot name="length">Garums ?</x-slot>
                    <x-slot name="gate">Vārti: attīšanas veids no abiem galiem, platums 3,7 m un augstums 3,5 m</x-slot>
                    <x-slot name="productLink">@lang('Uzzināt vairāk')</x-slot>
                </x-category.card>
                <x-category.card
                    href="{{route('product.show', ['category' => request()->route('category'), 'product' => 'produkts-demo'])}}">
                    <x-slot name="productImage">
                        {{ asset('images/storex-siltnamis-front-page.jpg') }}
                    </x-slot>
                    <x-slot name="productHeading">NORDA</x-slot>
                    <x-slot name="area">Platība 56 - 84 m2</x-slot>
                    <x-slot name="width">Platums 7 m</x-slot>
                    <x-slot name="height">Augstums 4,8 m</x-slot>
                    <x-slot name="length">Garums ?</x-slot>
                    <x-slot name="gate">Vārti: attīšanas veids no abiem galiem, platums 3,7 m un augstums 3,5 m</x-slot>
                    <x-slot name="productLink">@lang('Uzzināt vairāk')</x-slot>
                </x-category.card>
                <x-category.card
                    href="{{route('product.show', ['category' => request()->route('category'), 'product' => 'produkts-demo'])}}">
                    <x-slot name="productImage">
                        {{ asset('images/storex-gyvuliams-front-page.jpg') }}
                    </x-slot>
                    <x-slot name="productHeading">NORDA</x-slot>
                    <x-slot name="area">Platība 56 - 84 m2</x-slot>
                    <x-slot name="width">Platums 7 m</x-slot>
                    <x-slot name="height">Augstums 4,8 m</x-slot>
                    <x-slot name="length">Garums ?</x-slot>
                    <x-slot name="gate">Vārti: attīšanas veids no abiem galiem, platums 3,7 m un augstums 3,5 m</x-slot>
                    <x-slot name="productLink">@lang('Uzzināt vairāk')</x-slot>
                </x-category.card>
            </div>
        </div>

        {{-- MOBILE LAYOUT --}}
        <div class="block pb-16 sm:hidden">
            {{--
                @if ($categories->isEmpty())
                <div class="mt-3 flex items-center justify-center">
                <p>
                @lang('Kategorijas nav atrastas')
                .
                </p>
                </div>
                @else
            --}}
            <div class="carousel m-0 p-0" data-flickity='{ "contain": true }'>
                <x-category.card
                    href="{{route('product.show', ['category' => request()->route('category'), 'product' => 'produkts-demo'])}}">
                    <x-slot name="productImage">
                        {{ asset('images/storex-alaska-s-front-page.jpg') }}
                    </x-slot>
                    <x-slot name="productHeading">NORDA</x-slot>
                    <x-slot name="area">Platība 56 - 84 m2</x-slot>
                    <x-slot name="width">Platums 7 m</x-slot>
                    <x-slot name="height">Augstums 4,8 m</x-slot>
                    <x-slot name="length">Garums ?</x-slot>
                    <x-slot name="gate">Vārti: attīšanas veids no abiem galiem, platums 3,7 m un augstums 3,5 m</x-slot>
                    <x-slot name="productLink">@lang('Uzzināt vairāk')</x-slot>
                </x-category.card>
                <x-category.card
                    href="{{route('product.show', ['category' => request()->route('category'), 'product' => 'produkts-demo'])}}">
                    <x-slot name="productImage">
                        {{ asset('images/storex-container-front-page.jpg') }}
                    </x-slot>
                    <x-slot name="productHeading">NORDA</x-slot>
                    <x-slot name="area">Platība 56 - 84 m2</x-slot>
                    <x-slot name="width">Platums 7 m</x-slot>
                    <x-slot name="height">Augstums 4,8 m</x-slot>
                    <x-slot name="length">Garums ?</x-slot>
                    <x-slot name="gate">Vārti: attīšanas veids no abiem galiem, platums 3,7 m un augstums 3,5 m</x-slot>
                    <x-slot name="productLink">@lang('Uzzināt vairāk')</x-slot>
                </x-category.card>
                <x-category.card
                    href="{{route('product.show', ['category' => request()->route('category'), 'product' => 'produkts-demo'])}}">
                    <x-slot name="productImage">
                        {{ asset('images/storex-siltnamis-front-page.jpg') }}
                    </x-slot>
                    <x-slot name="productHeading">NORDA</x-slot>
                    <x-slot name="area">Platība 56 - 84 m2</x-slot>
                    <x-slot name="width">Platums 7 m</x-slot>
                    <x-slot name="height">Augstums 4,8 m</x-slot>
                    <x-slot name="length">Garums ?</x-slot>
                    <x-slot name="gate">Vārti: attīšanas veids no abiem galiem, platums 3,7 m un augstums 3,5 m</x-slot>
                    <x-slot name="productLink">@lang('Uzzināt vairāk')</x-slot>
                </x-category.card>
                <x-category.card
                    href="{{route('product.show', ['category' => request()->route('category'), 'product' => 'produkts-demo'])}}">
                    <x-slot name="productImage">
                        {{ asset('images/storex-gyvuliams-front-page.jpg') }}
                    </x-slot>
                    <x-slot name="productHeading">NORDA</x-slot>
                    <x-slot name="area">Platība 56 - 84 m2</x-slot>
                    <x-slot name="width">Platums 7 m</x-slot>
                    <x-slot name="height">Augstums 4,8 m</x-slot>
                    <x-slot name="length">Garums ?</x-slot>
                    <x-slot name="gate">Vārti: attīšanas veids no abiem galiem, platums 3,7 m un augstums 3,5 m</x-slot>
                    <x-slot name="productLink">@lang('Uzzināt vairāk')</x-slot>
                </x-category.card>
            </div>
        </div>
    </div>
</x-layout.app>
