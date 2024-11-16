{{-- DESKTOP VIEW --}}

<h2 class="mb-4 text-center lg:mb-12">@lang('STOREX klientu atsauksmes')</h2>

<div id="controls-carousel" class="hidden grid-cols-12 pb-4 lg:grid" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative order-2 col-span-10 h-32 overflow-hidden rounded-lg">
        {{-- 3 REVIEWS PER ITEM --}}

        <!-- Item 1 -->
        <div class="grid grid-cols-3 items-center duration-300 ease-in-out" data-carousel-item="active">
            <x-reviews.content.review-1></x-reviews.content.review-1>
            <x-reviews.content.review-2></x-reviews.content.review-2>
            <x-reviews.content.review-3></x-reviews.content.review-3>
        </div>

        <!-- Item 2 -->
        <div class="grid grid-cols-3 items-center duration-300 ease-in-out" data-carousel-item></div>
    </div>
    <x-reviews.controls></x-reviews.controls>
</div>

{{-- MOBILE VIEW --}}

<div id="controls-carousel" class="grid grid-cols-12 pb-4 lg:hidden" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative order-2 col-span-10 h-32 overflow-hidden rounded-lg">
        {{-- 1 REVIEW PER ITEM --}}
        <!-- Item 1 -->
        <div class="flex items-center duration-300 ease-in-out" data-carousel-item="active">
            <x-reviews.content.review-1></x-reviews.content.review-1>
        </div>
        <!-- Item 2 -->
        <div class="flex items-center duration-300 ease-in-out" data-carousel-item>
            <x-reviews.content.review-2></x-reviews.content.review-2>
        </div>
        <!-- Item 3 -->
        <div class="flex items-center duration-300 ease-in-out" data-carousel-item>
            <x-reviews.content.review-3></x-reviews.content.review-3>
        </div>
    </div>
    <!-- Slider controls -->
    <x-reviews.controls></x-reviews.controls>
</div>
