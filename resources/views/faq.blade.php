<x-layout.app>
    <x-slot name="title">@lang('Biežāk uzdotie jautājumi')</x-slot>
    <div class="container mx-auto px-4 sm:py-12 lg:px-6 xl:px-8">
        {{-- pb-10 instead of pb-12 since Qs have py-2 --}}
        <div class="pb-6 pt-28 sm:pb-10 sm:pt-0">
            <h1>@lang('Biežāk uzdotie jautājumi')</h1>
        </div>
        <div class="mx-auto w-full pb-8 sm:pb-12">
            <x-faq.content></x-faq.content>
        </div>
    </div>
</x-layout.app>
