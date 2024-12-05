{{-- DESKTOP LAYOUT --}}
<div class="hidden bg-white px-4 sm:block sm:p-0">
    <div class="flex items-center justify-between border-b-1 border-storex-light-grey">
        <h3>@lang('Tenta angāru veidi un aksesuāri')</h3>
        <a href="/products" class="border-b-2 border-transparent font-bold text-storex-red hover:border-storex-red">
            @lang('Skatīt
            visus')
        </a>
    </div>
    <div class="gap-10 sm:grid sm:grid-cols-2 sm:p-0 sm:py-4 md:grid-cols-3 xl:grid-cols-4">
        <x-products.content></x-products.content>
    </div>
</div>

{{-- MOBILE LAYOUT --}}
<div class="mb-4 block sm:hidden">
    <h2 class="border-b-1 text-center">@lang('Tenta angāru veidi un aksesuāri')</h2>
    <div class="gallery js-flickity carousel" data-flickity='{ "contain": true }'>
        <x-products.content></x-products.content>
    </div>
</div>
