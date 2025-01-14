{{-- DESKTOP LAYOUT --}}
<div class="hidden bg-white sm:block">
    <div class="flex items-center justify-between border-b-1 border-storex-light-grey">
        <h2 class="pb-2">@lang('Tenta angāru veidi un aksesuāri')</h2>
        <a
            href="{{ route('category.index') }}"
            class="inline-flex items-center border-b-2 border-transparent font-bold text-storex-red transition duration-200 hover:border-storex-red"
        >
            @lang('Skatīt
            visus')
            <svg
                id="arrow-svg"
                class="ms-2 h-2.5 w-2.5 -rotate-90 transition duration-200"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m1 1 4 4 4-4"
                />
            </svg>
        </a>
    </div>
    @if ($categories->isEmpty())
        <div class="mt-3 flex items-center justify-center">
            <x-info-status-message/>
        </div>
    @else
        <div class="gap-10 sm:grid sm:grid-cols-2 sm:p-0 sm:pt-8 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($categories as $category)
                <x-categories.card
                    href="{{ route('category.show', $category->slug) }}"
                    :featured="$category->is_featured"
                >
                    <x-slot name="image">
                        {{ Storage::url('categories/' . $category->image) }}
                    </x-slot>
                    <x-slot name="heading">{{ $category->title }}</x-slot>
                    @if($category->area !== '')
                        <x-slot name="area">{{$category->area}}</x-slot>
                    @endif
                    <x-slot name="description">{!! $category->description !!}</x-slot>
                    <x-slot name="link">@lang('Uzzināt vairāk')</x-slot>
                </x-categories.card>
            @endforeach
        </div>
    @endif
</div>

{{-- MOBILE LAYOUT --}}
<div class="block sm:hidden">
    <h2 class="border-b-1 pb-2 text-center">@lang('Tenta angāru veidi un aksesuāri')</h2>
    @if ($categories->isEmpty())
        <div class="mt-3 flex items-center justify-center">
            <x-info-status-message/>
        </div>
    @else
        <div class="carousel my-8" data-flickity='{ "contain": true }'>
            @foreach ($categories as $category)
                <x-categories.card
                    href="{{ route('category.show', $category->slug) }}"
                    :featured="$category->is_featured"
                >
                    <x-slot name="image">
                        {{ Storage::url('categories/' . $category->image) }}
                    </x-slot>
                    <x-slot name="heading">{{ $category->title }}</x-slot>
                    @if(isset($category->area))
                        <x-slot name="area">{{$category->area}}</x-slot>
                    @endif
                    <x-slot name="description">{!! $category->description !!}</x-slot>
                    <x-slot name="link">@lang('Uzzināt vairāk')</x-slot>
                </x-categories.card>
            @endforeach
        </div>
    @endif
</div>
