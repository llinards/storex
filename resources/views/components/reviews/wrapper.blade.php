<h2 class="border-b-1 text-center lg:border-none">@lang('STOREX klientu atsauksmes')</h2>

{{-- DESKTOP VIEW --}}
<div class="hidden lg:block">
    <div class="review-carousel" data-flickity='{ "groupCells": true }'>
        <x-reviews.content></x-reviews.content>
    </div>
</div>

{{-- MOBILE VIEW --}}
<div class="lg:hidden">
    <div class="gallery js-flickity carousel pt-4 sm:pt-8" data-flickity='{ "contain": true }'>
        <x-reviews.mob-content></x-reviews.mob-content>
    </div>
</div>
