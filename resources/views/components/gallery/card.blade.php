<div>
    <div class="relative flex justify-center">
        {{-- data-fancybox="gallery-a" links all images to a single instance of fancybox or "gallery" --}}
        <a href="{{ $imageOne }}" data-fancybox="{{ $gallery }}">
            <img class="h-96 w-full sm:w-96 object-cover" src="{{ $imageOne }}" alt="" />

        </a>

        {{-- Hides all associated images from the preview, but shows them when fancybox is open --}}
        <a class="hidden" href="{{ $imageTwo }}" data-fancybox="{{ $gallery }}">
            <img src="{{ $imageTwo }}" alt="" />
        </a>
        <a class="hidden" href="{{ $imageThree }}" data-fancybox="{{ $gallery }}">
            <img src="{{ $imageThree }}" alt="" />
        </a>

        {{-- Button positioned on top of the image --}}
        <div class="absolute bottom-3 w-72 sm:w-80 bg-white p-3 flex justify-between items-end">
            <h2 class="text-lg">{{ $productName }}</h2>
            <button
                class="gallery-trigger inline-flex items-center border-b-2 border-transparent font-bold text-storex-red transition duration-200 hover:border-storex-red focus:outline-none focus:ring-2 focus:ring-storex-red"
                data-gallery="{{ $gallery }}">
                @lang('Skatīt')
                <svg id="arrow-svg" class="ms-2 h-2.5 w-2.5 -rotate-90 transition duration-200" role="img"
                    aria-labelledby="arrow-svg-title" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <title id="arrow-svg-title">@lang('Bulta pa labi')</title>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
        </div>
    </div>
</div>