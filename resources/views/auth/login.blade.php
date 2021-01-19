@extends('layouts.app')

@section('content')
    <div class="w-full flex justify-center">
        <div class="w-2/3 mt-16">
            <div class="px-32 mt-16 border mx-12 py-12 bg-blue bg-opacity-50 ">
                <p class="text-3xl ">Login</p>
                <form class="" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="my-8">
                        <label for="username" class="text-2xl">
                            {{ __('Username') }}:
                        </label>

                        <input id="username" type="text"
                               class="form-input w-full mt-4 border bg-gray-light rounded @error('username') border-red-500 @enderror" name="username"
                               value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                    </div>

                    <div class="my-8">
                        <label for="password" class="text-2xl">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                               class="form-input w-full mt-4 border bg-gray-light rounded @error('password') border-red-500 @enderror" name="password"
                               value="{{ old('password') }}" required autocomplete="password" autofocus>

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                    <div class="flex items-center mt-2">
                        <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                            <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </label>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="w-96 border bg-gray rounded-xl text-2xl h-12">
                            {{ __('Login') }}
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
