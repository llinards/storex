<x-layout.app>
    <div class="bg-storex-light-grey">
        <div class="container sm:m-12 sm:mx-auto">
            @include('includes.header')
            <x-why-choose-us class="pb-8 pt-4"></x-why-choose-us>
        </div>
    </div>
    <div class="container sm:m-12 sm:mx-auto">
        <x-products></x-products>
    </div>
    <div class="bg-storex-light-grey py-4">
        <div class="container my-8 sm:m-12 sm:mx-auto">
            <x-why-choose-us-text></x-why-choose-us-text>
            <div class="py-16">
                @include('includes.mid-banner')
            </div>
            <x-for-who></x-for-who>
            <x-faq></x-faq>
        </div>
    </div>
    <div class="py-4">
        <div class="my-8 sm:m-12 sm:mx-auto">
            @include('includes.reviews-desktop')
        </div>
    </div>
</x-layout.app>
