<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ isset($title) ? $title . ' | ' . config('app.name') : config('app.name') }}</title>

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/admin.js'])
    </head>
    <body>
        <main class="admin-dashboard">
            <div class="container mx-auto">
                <x-admin.navbar />
                <div class="mt-4 flex flex-col items-center">
                    <h1 class="text-2xl font-bold">{{ $title }}</h1>
                    {{ $slot }}
                </div>
            </div>
        </main>
    </body>
</html>
