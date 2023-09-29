<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Gabarito' rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="body">
        <div class="w-layout-blockcontainer">
            <section    class="section">
             <img src="\image\EMT-Logo (1).png" loading="lazy" width="75" alt="Logo">
                {{ $slot }}
            </section>
        </div>
    </body>
</html>
