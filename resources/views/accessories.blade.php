<x-layout.app>
    <x-slot name="title">{{$category->title}}</x-slot>
    <x-slot name="description">{{ strip_tags($category->description) }}</x-slot>
    <x-slot name="image">{{ asset('storage/categories/' . $category->image) }}</x-slot>
    <div class="container mx-auto px-4 sm:py-12 lg:px-6 xl:px-8 ">
        <h1 class="pt-28 pb-8 sm:pt-0 sm:pb-12">{{$category->title}}</h1>

        <div class="grid xl:grid-cols-2 gap-8 sm:justify-center">
            @foreach($products as $product)
                <x-accessories.card>
                    <x-slot name="slug">{{ Str::slug($product->title, '-') }}</x-slot>
                    <x-slot name="image"> {{ asset('storage/products/' . $product->images[0]->filename) }}</x-slot>
                    <x-slot name="title">{{$product->title}}</x-slot>
                    <x-slot name="description">{!! $product->description !!}</x-slot>
                    <x-slot name="price">{{ number_format($product->price, 0, '.', ' ') }}</x-slot>
                </x-accessories.card>
            @endforeach
        </div>
    </div>

    <div style="background-image: url('{{ asset('images/storex-background.png') }}')" class="bg-cover bg-center">
        <div class="container mx-auto px-4 py-8 sm:py-12 lg:px-6 xl:px-8">
            <x-contact-us></x-contact-us>
        </div>
    </div>

</x-layout.app>
