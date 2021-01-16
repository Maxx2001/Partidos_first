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
    @livewireStyles

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
    <body>
<header>

    <ul class="flex py-4 justify-center border">
        <li><a class="border-2 m-3 py-2 px-4 rounded-2xl text-3xl" href="/">Home</a></li>

        <li class="dropdown inline-block relative">
            <button class="border-2 m-3 -mt-1.5 py-1 px-4 rounded-2xl text-3xl  inline-flex items-center">
                <span class="mr-1"><a href="{{ route('agenda')}}">Agenda</a></span>
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
            </button>
            <ul class="dropdown-menu absolute hidden text-gray-700 ">
                <li ><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('create_event')}}">Create event</a></li>
                <li ><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('your_created_events')}}">Your created events</a></li>
                <li ><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('your_invites')}}">Your invites </a></li>
                <li ><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('your_invited_events')}}">Your invited events </a></li>
            </ul>
        </li>
        <li><a class="border-2 m-3 py-2 px-4 rounded-2xl text-3xl" href="{{ route('profile')}}">Profile</a></li>

        <li class="dropdown inline-block relative">
            <button class="border-2 m-3 -mt-1.5 py-1 px-4 rounded-2xl text-3xl  inline-flex items-center">
                <span class="mr-1"><a href="{{ route('friends')}}">Friends</a></span>
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
            </button>
            <ul class="dropdown-menu absolute hidden text-gray-700 pl-5">
                <li ><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('friends')}}">Friends</a></li>
                <li ><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('show_friend_request')}}">Friend requests</a></li>
                <li ><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('explore_users')}}">Explore Users</a></li>
            </ul>
        </li>

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
        @livewireScripts

    </body>
</html>

<style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>
