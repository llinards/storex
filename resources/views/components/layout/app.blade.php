<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css" />

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

    <body>
        <div class="border-bottom">
            <div class="container pb-3">
                @include('includes.navbar')
            </div>
        </div>
        <main class="py-4">
            {{ $slot }}
        </main>
    </body>
</html>
