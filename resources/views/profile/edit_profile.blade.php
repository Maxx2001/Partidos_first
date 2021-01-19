@extends('layouts.master')

@section('content')
    <div class="h-full flex flex-col">
        <div class="flex justify-center mt-16 ">
            <div class="
            border
            rounded-xl
            text-3xl
             p-4
             w-96
             h-12
             flex
             justify-center
             items-center
             bg-gray-light">
                Edit profile
            </div>
        </div>
        <div class="w-full flex justify-center mt-8">
            <img
                src="{{asset('/images/profile_pictures/default.jpg')}}"
                alt="Profile picture"
                class="w-52 rounded-full"
            >
        </div>
        <form action="{{ route('update_profile', $user) }}"
              class="flex flex-col items-center mt-8"
        @csrf
        @method('PATCH')
        <div>
            <label for="username" class="text-2xl">
                {{ __('Username') }}:
            </label>
            <input
                id="username"
                type="text"
                class="border text-2xl @error('username')  border-red-500 @enderror"
                name="username"
                value="{{ $user->username}}"
                required autocomplete="username "
                autofocus>
            @error('username')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div>
            <label for="name" class="text-2xl">
                {{ __('Name') }}:
            </label>
            <input
                id="name"
                type="text"
                class="border text-2xl @error('name')  border-red-500 @enderror"
                name="name"
                value="{{ $user->name}}"
                required autocomplete="name"
                autofocus>
            @error('name')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div>
            <label for="phonenumber" class="text-2xl">
                {{ __('Phone Number') }}:
            </label>
            <input
                id="phonenumber"
                type="tel"
                class="border text-2xl @error('phonenumber')  border-red-500 @enderror"
                name="phonenumber"
                value="{{ $user->phonenumber}}"
                required autocomplete="phonenumber"
                autofocus>
            @error('phonenumber')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="w-1/4 flex justify-center">
            <button type="submit">
                <p class="border rounded bg-blue w-56 text-center text-xl my-4 h-12 flex justify-center items-center"
                >Update profiel
                </p>
            </button>
        </div>
        </form>

        <div class="h-full bg-blue bg-opacity-20">
        </div>
    </div>

@endsection
