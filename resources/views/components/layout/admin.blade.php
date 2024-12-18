<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>{{ isset($title) ? $title . ' | ' . config('app.name') : config('app.name') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<main class="admin-dashboard">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row">
            <div class="order-1 md:order-1 md:w-1/4 p-4">
                <x-admin.navbar/>
            </div>
            <div class="order-2 md:order-2 md:w-3/4 p-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</main>
</body>
</html>
