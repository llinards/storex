<x-nav.nav>
    <x-nav.production>
        <x-nav.dropdown-link href="#">Tenta angāri - nojumes</x-nav.dropdown-link>
        <x-nav.dropdown-link href="#">Konteineru tenta angāri</x-nav.dropdown-link>
        <x-nav.dropdown-link href="#">Industriālās siltumnīcas</x-nav.dropdown-link>
        <x-nav.dropdown-link href="#">Aksesuāri tenta angāriem</x-nav.dropdown-link>
        <x-nav.dropdown-link href="#">Cenrādis</x-nav.dropdown-link>
    </x-nav.production>

    <x-nav.blog>
        <x-nav.dropdown-link href="#">Raksts 1</x-nav.dropdown-link>
        <x-nav.dropdown-link href="#">Raksts 2</x-nav.dropdown-link>
    </x-nav.blog>

    <x-nav.link href="{{ route('gallery') }}" :active="request()->is('gallery')">@lang('Galerija')</x-nav.link>
    <x-nav.link href="{{ route('about') }}" :active="request()->is('about')">@lang('Par mums')</x-nav.link>
    <x-nav.link href="{{ route('contacts') }}" :active="request()->is('contacts')">@lang('Kontakti')</x-nav.link>
    <x-nav.link href="{{ route('faq') }}" :active="request()->is('faq')">@lang('BUJ')</x-nav.link>

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
</x-nav.nav>
