<x-layout.app>
    <div class="container mx-auto px-4 pb-8 sm:py-12 lg:px-6 xl:px-8">
        <div class="pb-8 pt-28 sm:pb-12 sm:pt-0">
            <h1>@lang('Blogs')</h1>
        </div>

        <div class="grid xl:grid-cols-2 gap-8 sm:justify-center">
            {{-- forEach goes here --}}
            <x-blog.articles>
                <x-slot name="articleImage">{{ asset('images/storex-facilities.jpg') }}</x-slot>
                <x-slot name="articleHeading">@lang('Tenta angāri pasākumiem')</x-slot>
                <x-slot name="articleSummary">@lang('Tenta angāri ir praktisks un ērts risinājums ne tikai lietu
                    glabāšanai, bet arī Jūsu gaidāmajiem svētkiem.')</x-slot>
            </x-blog.articles>
            <x-blog.articles>
                <x-slot name="articleImage">{{ asset('images/storex-gyvuliams-front-page.jpg') }}</x-slot>
                <x-slot name="articleHeading">@lang('Tenta angāri pasākumiem')</x-slot>
                <x-slot name="articleSummary">@lang('Tenta angāri ir praktisks un ērts risinājums ne tikai lietu
                    glabāšanai, bet arī Jūsu gaidāmajiem svētkiem.')</x-slot>
            </x-blog.articles>
        </div>
    </div>
</x-layout.app>