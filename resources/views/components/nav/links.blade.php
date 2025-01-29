@if (! $categories->isEmpty())
    <x-nav.production>
        @foreach ($categories as $category)
            <x-nav.dropdown-link href="{{ route('category.show', $category->slug) }}">
                {{ $category->title }}
            </x-nav.dropdown-link>
        @endforeach
    </x-nav.production>
@endif

{{-- <x-nav.blog> --}}
{{-- <x-nav.dropdown-link href="#">Raksts 1</x-nav.dropdown-link> --}}
{{-- <x-nav.dropdown-link href="#">Raksts 2</x-nav.dropdown-link> --}}
{{-- </x-nav.blog> --}}

{{-- <x-nav.link href="{{ route('gallery') }}" :active="request()->is('gallery')"> --}}
{{-- @lang('Galerija') --}}
{{-- </x-nav.link> --}}
<x-nav.link href="{{ route('pricelist') }}" :active="request()->routeIs('pricelist')">
    @lang('Cenrādis')
</x-nav.link>
<x-nav.link href="{{ route('about') }}" :active="request()->routeIs('about')">
    @lang('Par mums')
</x-nav.link>
<x-nav.link href="{{ route('contacts') }}" :active="request()->routeIs('contacts')">
    @lang('Kontakti')
</x-nav.link>
<x-nav.link href="{{ route('faq') }}" :active="request()->routeIs('faq')">
    @lang('BUJ')
</x-nav.link>
@if(count(config('app.available_locales')) > 1)
    <x-nav.lang>
        @foreach (config('app.available_locales') as $locale)
            <x-nav.lang-link href="{{ url()->current() }}?changeLanguage={{ $locale }}"
                             :active="app()->getLocale() === $locale">
                {{ strtoupper($locale) }}
            </x-nav.lang-link>
        @endforeach
    </x-nav.lang>
@endif
