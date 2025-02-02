<x-layout.app>
    <div
        style="background-image: url('{{ asset('images/placeholder-tent-1.jpg') }}')"
        class="bg-cover bg-center 2xl:container 2xl:mx-auto 2xl:max-w-[1472px]"
    >
        <div class="container sm:mx-auto">
            <div>
                @include('includes.header')
            </div>
        </div>
    </div>
    <div class="container sm:mx-auto sm:pb-12">
        <div class="px-4 py-8 sm:py-0 lg:px-6 xl:px-8">
            <x-why-choose-us.wrapper></x-why-choose-us.wrapper>
        </div>
    </div>

    <div class="bg-white">
        <div class="container px-4 py-8 sm:mx-auto sm:py-12 lg:px-6 xl:px-8">
            <x-categories.wrapper :categories="$categories"></x-categories.wrapper>
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

            <div class="px-4 py-8 sm:py-0 sm:pb-12 lg:px-6 xl:px-8">
                <x-faq.wrapper></x-faq.wrapper>
            </div>
        </div>
    </div>

    <div class="bg-white py-8 sm:py-12">
        <div class="container px-4 sm:mx-auto lg:px-6 xl:px-8">
            <x-reviews.wrapper></x-reviews.wrapper>
        </div>
    </div>
</x-layout.app>
