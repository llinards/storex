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
    <body class="min-h-screen">
        <main class="flex min-h-screen flex-col items-center justify-center">
            <div class="mb-4 flex justify-center">
                <img src="{{ asset('images/storex-logo.png') }}" class="w-1/3" alt="Storex Structures logo" />
            </div>
            {{ $slot }}
        </main>
    </body>
</html>
