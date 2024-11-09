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
        <div class="fixed w-full border-b-2 bg-white sm:relative">
            <div class="container mx-auto px-4 sm:px-0">
                @include('includes.navbar')
            </div>
        </div>
        <main>
            <div class="">
                {{ $slot }}
            </div>
        </main>
        <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
    </body>
</html>
