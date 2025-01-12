<x-layout.app>
    <x-slot name="title">@lang('Tenta angāru veidi un aksesuāri')</x-slot>
    <div class="container mx-auto px-4 sm:py-12 lg:px-6 xl:px-8">
        <div class="pt-28 sm:pt-0">
            <h1>@lang('Tenta angāru veidi un aksesuāri')</h1>
        </div>

        {{-- DESKTOP LAYOUT --}}
        <div class="hidden sm:block">
            @if ($categories->isEmpty())
                <div class="mt-3 flex items-center justify-center">
                    <x-info-status-message />
                </div>
            @else
                <div class="gap-10 sm:grid sm:grid-cols-2 sm:p-0 sm:pt-12 lg:grid-cols-3 xl:grid-cols-4">
                    @foreach ($categories as $category)
                        <x-categories.card href="{{ route('category.show', ['category' => $category->slug]) }}">
                            <x-slot name="image">
                                {{ Storage::url('categories/' . $category->image) }}
                            </x-slot>
                            <x-slot name="heading">{{ $category->title }}</x-slot>
                            <x-slot name="description">{!! $category->description !!}</x-slot>
                            <x-slot name="link">@lang('Uzzināt vairāk')</x-slot>
                        </x-categories.card>
                    @endforeach
                </div>
            @endif
        </div>

        {{-- MOBILE LAYOUT --}}
        <div class="block pb-16 sm:hidden">
            @if ($categories->isEmpty())
                <div class="mt-3 flex items-center justify-center">
                    <x-info-status-message />
                </div>
            @else
                <div class="carousel" data-flickity='{ "contain": true }'>
                    @foreach ($categories as $category)
                        <x-categories.card href="{{ route('category.show', ['category' => $category->slug]) }}">
                            <x-slot name="image">
                                {{ Storage::url('categories/' . $category->image) }}
                            </x-slot>
                            <x-slot name="heading">{{ $category->title }}</x-slot>
                            <x-slot name="description">{!! $category->description !!}</x-slot>
                            <x-slot name="link">@lang('Uzzināt vairāk')</x-slot>
                        </x-categories.card>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-layout.app>
