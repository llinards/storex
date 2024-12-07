<div {{ $attributes->merge(['class' => 'hidden sm:block']) }}>
    <div class="items-center px-4 sm:flex sm:px-0 sm:py-8">
        <x-why-choose-us.reason-1></x-why-choose-us.reason-1>
    </div>

    <div class="grid grid-cols-2 gap-4 p-4 sm:p-0 lg:grid-cols-4">
        <x-why-choose-us.reason-2></x-why-choose-us.reason-2>
        <x-why-choose-us.reason-3></x-why-choose-us.reason-3>
        <x-why-choose-us.reason-4></x-why-choose-us.reason-4>
        <x-why-choose-us.reason-5></x-why-choose-us.reason-5>
    </div>
</div>

{{-- MOBILE LAYOUT --}}
<div class="block py-4 sm:hidden">
    <h2 class="border-b-1 text-center">@lang('Kāpēc STOREX?')</h2>
    <div class="gallery js-flickity carousel" data-flickity='{ "contain": true }'>
        <x-why-choose-us.content></x-why-choose-us.content>
    </div>
</div>
