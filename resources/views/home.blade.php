<x-layout.app>
    <div class="bg-storex-light-grey">
        <div class="container sm:m-12 sm:mx-auto">
            @include('includes.header')
            <x-why-choose-us.wrapper class="pb-8 pt-4"></x-why-choose-us.wrapper>
        </div>
    </div>
    <div class="container sm:m-12 sm:mx-auto">
        <x-products.wrapper></x-products.wrapper>
    </div>
    <div class="bg-storex-light-grey md:py-4">
        <div class="container mb-8 sm:mx-auto md:my-8">
            <x-why-choose-us.owners></x-why-choose-us.owners>
            <div class="md:py-16">
                @include('includes.mid-banner')
            </div>
            <x-for-who></x-for-who>
            <x-faq></x-faq>
        </div>
    </div>
    {{--
        <div class="py-4">
        <div class="my-8 sm:m-12 sm:mx-auto">
        @include('includes.reviews-desktop')
        </div>
        </div>
    --}}
</x-layout.app>
