<x-layout.error>
    <x-slot name="title">500</x-slot>
    <h2 class="text-center">@lang('An unknown error occurred, try again later')!</h2>
    <button class="btn btn-primary d-block mx-auto mt-4" onclick="window.history.back()">@lang('Back')</button>
</x-layout.error>
