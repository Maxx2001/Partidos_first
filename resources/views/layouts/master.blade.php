<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-screen ">
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
    <script src="https://kit.fontawesome.com/1be259931f.js" crossorigin="anonymous"></script>

</head>

<body class="h-screen flex flex-col">
        <div class="h-26 bg-blue">
            <ul class="flex text-3xl">
             <li>
                 <a href="{{ route('agenda') }}">
                     <img src="{{ asset('images/logo.svg') }}" alt="Logo"
                          class="w-24 ">
                 </a>
             </li>

                <li class="py-4 px-6">
                    <a href="{{ route('agenda') }}">
                        <div class="text-center">
                            <i class="far fa-calendar-alt"></i>
                            <p class="">Agenda</p>
                        </div>
                    </a>
                </li>

                <li class="py-4 px-6">
                    <a href="{{ route('friends') }}">
                        <div class="text-center">
                            <i class="fas fa-users"></i>
                            <p class="">Friends</p>
                        </div>
                    </a>
                </li>

                <li class="py-4 px-6">
                    <a href="{{ route('profile', $user = \Illuminate\Support\Facades\Auth::user()) }}">
                        <div class="text-center">
                            <i class="far fa-user"></i>
                            <p class="">Profile</p>
                        </div>
                    </a>
                </li>

                 <li class="py-4 px-6 ml-auto">
                     <a href="{{ url('/logout') }}">
                        <div class="text-center">
                            <i class="fas fa-door-open"></i>
                            <p class="">Log out</p>
                        </div>
                     </a>
                </li>
            </ul>
        </div>

        <div class="flex h-full">
            <div class="w-9/12">
                @yield('content')
            </div>

            <div class="bg-gray flex-grow pt-8 flex flex-col items-center">
                @livewire('find-user')

                <div class="border rounded-xl bg-gray-dark w-42 h-96 flex flex-col text-2xl pl-2 w-4/5 mt-8">
                    <div class="flex justify-center mt-4">
                        <i class="far fa-bell mt-1 mr-2"></i>
                        <p>Notifications</p>

                    </div>

                    <div class="flex justify-center mt-2 w-42 ">
                        <livewire:notifications />

                    </div>
                </div>

            </div>
                @livewireScripts
        </div>

</body>
</html>

