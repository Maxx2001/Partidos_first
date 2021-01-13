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
<header>

    <ul class="flex py-4 justify-center border">
        <li><a class="border-2 m-3 py-2 px-4 rounded-2xl text-3xl" href="/">Home</a></li>
        <li><a class="border-2 m-3 py-2 px-4 rounded-2xl text-3xl" href="{{ route('agenda') }}">Agenda</a></li>
        <li><a class="border-2 m-3 py-2 px-4 rounded-2xl text-3xl" href="{{ route('profile')}}">Profile</a></li>
        <li><a class="border-2 m-3 py-2 px-4 rounded-2xl text-3xl" href="{{ route('friends')}}">Friends</a></li>
        <li><a class="border-2 m-3 py-2 px-4 rounded-2xl text-3xl" href="#">Settings</a></li>
        <li><a href="{{ route('logout') }}"
           class="
           border-2 m-3 py-2 px-4 rounded-2xl text-3xl"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">{{ __('Logout') }}
            </a>
        <form id="logout-form"
              action="{{ route('logout') }}"
              method="POST"
              class="hidden">
            {{ csrf_field() }}
        </form>
        </li>
    </ul>
</header>
        @yield('content')
    </body>
</html>
