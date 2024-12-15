<h2 class="border-b-1 pb-2 text-center sm:pb-0 lg:border-none">@lang('STOREX klientu atsauksmes')</h2>

{{-- DESKTOP VIEW --}}
<div class="hidden lg:block">
    <div class="review-carousel" data-flickity='{ "groupCells": true }'>
        <x-reviews.content></x-reviews.content>
    </div>
</div>

{{-- MOBILE VIEW --}}
<div class="lg:hidden">
    <div class="carousel sm:pt-8" data-flickity='{ "contain": true }'>
        <x-reviews.mob-content></x-reviews.mob-content>
    </div>
</div>
