<x-layout.app>
    <div class="bg-storex-light-grey">
        <div class="container py-4 sm:mx-auto md:my-8">
            <div class="sm:px-4 lg:px-6 xl:px-8">
                @include('includes.header')
            </div>

            <div class="px-4 md:my-8 lg:px-6 xl:px-8">
                <x-why-choose-us.wrapper></x-why-choose-us.wrapper>
            </div>
        </div>
    </div>

    <div class="container px-4 sm:m-8 sm:mx-auto lg:px-6 xl:px-8">
        <x-products.wrapper></x-products.wrapper>
    </div>

    <div class="bg-storex-light-grey md:py-4">
        <div class="container mb-8 sm:mx-auto">
            <div class="sm:px-4 md:my-8 lg:px-6 xl:px-8">
                <x-why-choose-us.owners></x-why-choose-us.owners>
            </div>

            <div class="sm:px-4 lg:px-6 xl:px-8">
                @include('includes.mid-banner')
            </div>

            <div class="mb-4 sm:px-4 md:my-8 md:mb-0 lg:px-6 xl:px-8">
                <x-for-who></x-for-who>
            </div>

            <div class="my-4 px-4 md:my-8 lg:px-6 xl:px-8">
                <x-faq></x-faq>
            </div>
        </div>
    </div>

    <div class="container px-4 sm:mx-auto sm:my-8 lg:px-6 xl:px-8">
        <x-reviews.section></x-reviews.section>
    </div>
</x-layout.app>
