<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ isset($title) ? $title . ' | ' . config('app.name') : config('app.name') }}</title>

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="min-vh-100">
        <main class="d-flex justify-content-center align-items-center flex-column min-vh-100 mx-2">
            <div class="mb-4 text-center">
                <img src="{{ asset('images/storex-logo.png') }}" class="img-fluid w-25" alt="Storex Structures logo" />
            </div>
            {{ $slot }}
        </main>
    </body>
</html>
