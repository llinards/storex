<x-layout.app>
    <x-slot name="title">@lang('Tenta angāru veidi')</x-slot>
    <div class="container mx-auto px-4 sm:py-12 lg:px-6 xl:px-8">
        <div class="pt-28 sm:pt-0">
            <h1>@lang('Tenta angāru veidi')</h1>
        </div>

        {{-- DESKTOP LAYOUT --}}
        <div class="hidden sm:block">
            @if ($products->isEmpty())
                <div class="mt-3 flex items-center justify-center">
                    <x-info-status-message :text="__('Produkti nav atrasti')"/>
                </div>
            @else
                <div class="gap-10 sm:p-0 sm:pt-12 sm:grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @foreach ($products as $product)
                        @if(!$product->category->is_accessory)
                            <x-category.card :featured="$product->is_featured"
                                             href="{{route('product.show', [$product->category->slug, $product->slug])}}">
                                <x-slot name="image">
                                    {{ asset('storage/products/' . $product->images[0]->filename) }}
                                </x-slot>
                                <x-slot name="heading">{{ $product->title }}</x-slot>
                                <x-slot name="area">{{$product->available_area}}</x-slot>
                                <x-slot name="width">{{$product->available_width}}</x-slot>
                                <x-slot name="height">{{$product->available_height}}</x-slot>
                                <x-slot name="length">{{$product->available_length}}</x-slot>
                                <x-slot name="link">@lang('Uzzināt vairāk')</x-slot>
                            </x-category.card>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>

        {{-- MOBILE LAYOUT --}}
        <div class="block pb-12 sm:hidden">
            @if ($products->isEmpty())
                <div class="mt-3 flex items-center justify-center">
                    <x-info-status-message :text="__('Produkti nav atrasti')"/>
                </div>
            @else
                <div class="carousel m-0 p-0" data-flickity='{ "contain": true, "pageDots": false }'>
                    @foreach ($products as $product)
                        @if(!$product->category->is_accessory)
                            <x-category.card :featured="$product->is_featured"
                                             href="{{route('product.show', [$product->category->slug, $product->slug])}}">
                                <x-slot name="image">
                                    {{ asset('storage/products/' . $product->images[0]->filename) }}
                                </x-slot>
                                <x-slot name="heading">{{ $product->title }}</x-slot>
                                <x-slot name="area">{{$product->available_area}}</x-slot>
                                <x-slot name="width">{{$product->available_width}}</x-slot>
                                <x-slot name="height">{{$product->available_height}}</x-slot>
                                <x-slot name="length">{{$product->available_length}}</x-slot>
                                <x-slot name="link">@lang('Uzzināt vairāk')</x-slot>
                            </x-category.card>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-layout.app>
