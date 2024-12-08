<x-layout.error>
    <x-slot name="title">404</x-slot>
    <h2 class="text-center mb-4">
        @lang('Page Not Found')!
    </h2>
    <x-btn type="button" onclick="window.history.back()">@lang('Back')</x-btn>
</x-layout.error>
