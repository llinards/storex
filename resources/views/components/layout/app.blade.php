<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <meta name="author" content="{{ config('app.name') }}">
    <meta name="locale" content="{{ app()->getLocale() }}">
    <meta name="keywords"
          content="tenta angāri, vieglās konstrukcijas angāri, tenta noliktavas, tenta garažas, PVC nojumes, pasākumu nojumes, agāru īre, tenta pārklāji, tirdzniecības nojumes, lopu novietnes, mājdzīvnieku fermas, PVC remonts">

    <meta property="og:title" content="{{ isset($title) ? $title . ' | ' . config('app.name') : config('app.name')}}"/>
    <meta property="og:image" content="{{ $image ?? asset('images/storex-logo-white.png') }}"/>
    <meta name="description"
          content="{{$description ?? 'Ja Jums pašlaik ir maza saimniecība, bet Jūs plānojat to nākotnē paplašināt - izvēlieties tādu izmēru, kāds ir nepieciešams pašlaik, un nākotnē Jūs vienmēr varēsiet to pagarināt. Viena modeļa tenta angāriem, kas savienoti savā starpā, nav spraugu, plaisu un detaļas skaisti saplūst kopā. Jau vairākus gadus mūsu kādreizējie klienti ik pa laikam sazinās ar mums, lūdzot pagarināt viņu nopirkto angāru.'}}">
    <meta property="og:description"
          content="{{$description ?? 'Ja Jums pašlaik ir maza saimniecība, bet Jūs plānojat to nākotnē paplašināt - izvēlieties tādu izmēru, kāds ir nepieciešams pašlaik, un nākotnē Jūs vienmēr varēsiet to pagarināt. Viena modeļa tenta angāriem, kas savienoti savā starpā, nav spraugu, plaisu un detaļas skaisti saplūst kopā. Jau vairākus gadus mūsu kādreizējie klienti ik pa laikam sazinās ar mums, lūdzot pagarināt viņu nopirkto angāru.'}}"/>

    <meta property="og:url" content=" {{Request::url()}}"/>
    <meta property="og:type" content="website"/>

    <title>{{ isset($title) ? $title . ' | ' . config('app.name') : 'Sākums' . ' | ' . config('app.name')}}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
@include('includes.navbar')
<main>
    {{ $slot }}
    <x-call-btn></x-call-btn>
</main>
@include('includes.footer')

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>--}}
</body>
</html>
