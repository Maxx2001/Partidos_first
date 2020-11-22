<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex justify-center items-center h-screen flex-col">
        <h1 class="text-6xl mb-2" style="font-family: Corben">Partidos</h1>
        <div class="flex">
            <button><a class="border px-4 py-2 rounded-2xl m-4 w-24" href="/login">Login</a></button>
            <button><a class="border px-4 py-2 rounded-2xl m-4 w-24" href="/register">Register</a></button>
        </div>
    </div>
</body>
