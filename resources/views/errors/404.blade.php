<x-layout.error>
    <x-slot name="title">404</x-slot>
    <h2 class="mb-4 text-center">
        @lang('Page Not Found')
        !
    </h2>
    <x-btn type="button" onclick="window.history.back()">@lang('Back')</x-btn>
</x-layout.error>
