<x-nav.production>
    @foreach ($categories as $category)
        <x-nav.dropdown-link href="{{ route('category.show', ['category' => $category->slug]) }}">
            {{ $category->title }}
        </x-nav.dropdown-link>
    @endforeach
</x-nav.production>

{{-- <x-nav.blog> --}}
{{-- <x-nav.dropdown-link href="#">Raksts 1</x-nav.dropdown-link> --}}
{{-- <x-nav.dropdown-link href="#">Raksts 2</x-nav.dropdown-link> --}}
{{-- </x-nav.blog> --}}

{{-- <x-nav.link href="{{ route('gallery') }}" :active="request()->is('gallery')"> --}}
{{-- @lang('Galerija') --}}
{{-- </x-nav.link> --}}
<x-nav.link href="{{ route('pricelist') }}" :active="request()->is('pricelist')">
    @lang('Cenrādis')
</x-nav.link>
<x-nav.link href="{{ route('about') }}" :active="request()->is('about')">
    @lang('Par mums')
</x-nav.link>
<x-nav.link href="{{ route('contacts') }}" :active="request()->is('contacts')">
    @lang('Kontakti')
</x-nav.link>
{{-- <x-nav.link href="{{ route('faq') }}" :active="request()->is('faq')"> --}}
{{-- @lang('BUJ') --}}
{{-- </x-nav.link> --}}
<x-nav.lang>
    @foreach (config('app.available_locales') as $locale)
        <x-nav.dropdown-link
            href="{{route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => $locale])}}"
            :active="app()->getLocale() === $locale"
        >
            {{ strtoupper($locale) }}
        </x-nav.dropdown-link>
    @endforeach
</x-nav.lang>
