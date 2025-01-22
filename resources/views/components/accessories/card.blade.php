<div class="carousel-cell sm:flex lg:flex-row items-center p-4 bg-white border-1 rounded-lg shadow-md sm:max-w-full">
    <a href="{{ asset('images/storex-container-front-page.jpg') }}" data-fancybox="{{ $gallery }}">
        <img class="object-cover h-auto sm:w-96 lg:w-80 xl:w-96"
            src="{{ asset('images/storex-container-front-page.jpg') }}" alt="">
    </a>
    <div class="flex flex-col justify-between sm:h-full sm:w-full sm:pl-4">
        <div>
            <h2 class="pt-4 sm:pt-0 text-xl">@lang('Jūras
                konteineris')</h2>
            <p class="py-4">@lang('Standarta 12 m garš jūras
                konteiners
                ar sānu durvīm').</p>
        </div>
        <div class="flex items-end justify-between">
            <p class="text-storex-red text-xl sm:text-2xl">
                {{-- @forelse ($product->variants as $variant)
                <span id="product-price_{{ Str::slug($variant->title, '_') }}"
                    class="{{ $loop->first ? '' : 'hidden' }} font-bold">
                    {{ number_format($variant->price, 0, '.', ' ') }} €
                </span>
                @empty
                <span class="font-bold">{{ number_format($product->price, 0, '.', ' ') }} €</span>
                @endforelse
                +
                @lang('PVN') --}}
                <span class="font-bold">100 €</span> + @lang('PVN')
            </p>

            <x-sm-btn href="#contact-us" class="scroll-btn flex items-center">
                @lang('
                Pasūtīt
                ')
            </x-sm-btn>
        </div>
    </div>
</div>