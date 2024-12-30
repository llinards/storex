<div {{ $attributes->merge(['class' => 'hidden sm:block']) }}>
    <div class="items-center px-4 sm:flex sm:px-0 sm:py-12">
        <x-why-choose-us.reason-1></x-why-choose-us.reason-1>
    </div>

    <div class="grid grid-cols-2 gap-8 p-4 sm:p-0 xl:grid-cols-4 xl:gap-12">
        <x-why-choose-us.reason-2></x-why-choose-us.reason-2>
        <x-why-choose-us.reason-3></x-why-choose-us.reason-3>
        <x-why-choose-us.reason-4></x-why-choose-us.reason-4>
        <x-why-choose-us.reason-5></x-why-choose-us.reason-5>
    </div>
</div>

{{-- MOBILE LAYOUT --}}
<div class="block sm:hidden">
    <h2 class="border-b-1 pb-2 text-center">@lang('Kāpēc STOREX?')</h2>
    <div class="carousel my-8" data-flickity='{ "contain": true }'>
        <x-why-choose-us.content></x-why-choose-us.content>
    </div>
</div>
