<x-layout.error>
    <x-slot name="title">503</x-slot>
    <h2 class="text-center">@lang('Service Unavailable')!</h2>
    <h3 class="text-center">@lang('Sorry, we are doing some maintenance. We will be back soon.')</h3>
    <button class="btn btn-primary d-block mx-auto mt-4" onclick="location.reload()">@lang('Refresh')</button>
</x-layout.error>
