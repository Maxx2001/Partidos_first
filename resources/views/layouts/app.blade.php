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
    <script src="https://kit.fontawesome.com/1be259931f.js" crossorigin="anonymous"></script>

    @livewireStyles

</head>
    <header>
        <div class="h-24 flex bg-blue  justify-between">
            <div class="flex items-center">
                <div>
                    <img src="{{ asset('images/logo.svg') }}" alt="Logo"
                         class="w-24 ">
                </div>
                <div>
                    <p class="text-4xl ml-4">Partidos</p>
                </div>
            </div>

            <div class="flex items-center ">
              <div class="text-center text-3xl">
                  <a class="flex flex-col" href="{{ route('login') }}">
                      <i class="far fa-user"></i>
                      <p>login</p>
                  </a>
              </div>
                <div class="flex items-center pr-10 pl-4">
                    <div class="text-center text-3xl">
                        <a class="flex flex-col" href="{{ route('register') }}">
                            <i class="fas fa-pencil-alt"></i>
                            <p>Register</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>


        @yield('content')
        @livewireScripts

    </div>
</html>
