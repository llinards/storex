<x-layout.error>
    <x-slot name="title">503</x-slot>
    <h2 class="mb-4 text-center">
        @lang('Service Unavailable')
        !
    </h2>
    <h3 class="text-center">@lang('Sorry, we are doing some maintenance. We will be back soon.')</h3>
    <x-btn type="button" onclick="location.reload()">@lang('Refresh')</x-btn>
</x-layout.error>
