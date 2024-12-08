<x-layout.error>
    <x-slot name="title">500</x-slot>
    <h2 class="text-center mb-4">
        @lang('An unknown error occurred, try again later')!
    </h2>
    <x-btn type="button" onclick="window.history.back()">@lang('Back')</x-btn>
</x-layout.error>
