<x-layout.app>
    <div class="bg-storex-light-grey">
        <div class="container pb-8 pt-4 sm:m-12 sm:mx-auto">
            @include('includes.header')
            <x-why-choose-us.wrapper class="mb-8 mt-4"></x-why-choose-us.wrapper>
        </div>
    </div>
    <div class="container sm:m-12 sm:mx-auto">
        <x-products.wrapper></x-products.wrapper>
    </div>
    <div class="bg-storex-light-grey md:py-4">
        <div class="container mb-8 sm:mx-auto md:my-8">
            <x-why-choose-us.owners></x-why-choose-us.owners>
            <div class="md:my-16">
                @include('includes.mid-banner')
            </div>
            <x-for-who></x-for-who>
            <div class="md:my-16">
                <x-faq></x-faq>
            </div>
        </div>
    </div>

    <div>
        <div class="container sm:mx-auto sm:py-12">
            <x-reviews.section></x-reviews.section>
        </div>
    </div>
</x-layout.app>
