<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
<div class="border-bottom">
    <div class="container pb-3">
        <x-nav.nav>

            <x-nav.dropdown>
                <x-slot name="toggle">Produkcija</x-slot>
                <x-slot name="links">
                    <x-nav.dropdown-link href="#">Tenta angāri - nojumes</x-nav.dropdown-link>
                    <x-nav.dropdown-link href="#">Konteineru tenta angāri</x-nav.dropdown-link>
                    <x-nav.dropdown-link href="#">Industriālās siltumnīcas</x-nav.dropdown-link>
                    <x-nav.dropdown-link href="#">Aksesuāri tenta angāriem</x-nav.dropdown-link>
                    <x-nav.dropdown-link href="#">Cenrādis</x-nav.dropdown-link>
                </x-slot>
            </x-nav.dropdown>

            <x-nav.dropdown>
                <x-slot name="toggle">Raksti</x-slot>
                <x-slot name="links">
                    <x-nav.dropdown-link href="#" :active="request()->is('article')">Raksts 1
                    </x-nav.dropdown-link>
                    <x-nav.dropdown-link href="#">Raksts 2</x-nav.dropdown-link>
                </x-slot>
            </x-nav.dropdown>

            <x-nav.link href="{{ route('gallery') }}" :active="request()->is('gallery')">Galerija</x-nav.link>
            <x-nav.link href="{{ route('about') }}" :active="request()->is('about')">Par Mums</x-nav.link>
            <x-nav.link href="{{ route('contacts') }}" :active="request()->is('contacts')">Kontakti</x-nav.link>
            <x-nav.link href="{{ route('faq') }}" :active="request()->is('faq')">BUJ</x-nav.link>

            <x-nav.lang>
                @foreach(config('app.available_locales') as $locale)
                    <x-nav.dropdown-link
                        href="{{route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => $locale])}}"
                        :active="app()->getLocale() === $locale">{{ strtoupper($locale) }}</x-nav.dropdown-link>
                @endforeach
            </x-nav.lang>

        </x-nav.nav>
    </div>
</div>
<main class="py-4">
    {{$slot}}
</main>
</body>

</html>
