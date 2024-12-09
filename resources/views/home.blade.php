<x-layout.app>
    <div>
        <div class="container sm:mx-auto sm:pb-12">
            <div class="sm:px-4 lg:px-6 xl:px-8">
                @include('includes.header')
            </div>

            <div class="px-4 py-8 sm:py-0 lg:px-6 xl:px-8">
                <x-why-choose-us.wrapper></x-why-choose-us.wrapper>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container px-4 py-8 sm:mx-auto sm:py-12 lg:px-6 xl:px-8">
            <x-products.wrapper></x-products.wrapper>
        </div>
    </div>

    <div>
        <div class="container sm:mx-auto">
            <div class="sm:px-4 sm:py-12 lg:px-6 xl:px-8">
                <x-why-choose-us.owners></x-why-choose-us.owners>
            </div>

            <div class="sm:px-4 sm:pb-12 lg:px-6 xl:px-8">
                @include('includes.mid-banner')
            </div>

            <div class="sm:px-4 sm:pb-12 lg:px-6 xl:px-8">
                <x-for-who></x-for-who>
            </div>
            {{--
                <div class="px-4 lg:px-6 xl:px-8 pb-12">
                <x-faq></x-faq>
                </div>
                
                <div class="my-4 px-4 lg:px-6 xl:px-8 py-12">
                <x-faq.wrapper></x-faq.wrapper>
                </div>
            --}}
        </div>
    </div>

    <div class="bg-white py-8 sm:py-12">
        <div class="container px-4 sm:mx-auto lg:px-6 xl:px-8">
            <x-reviews.wrapper></x-reviews.wrapper>
        </div>
    </div>
</x-layout.app>
