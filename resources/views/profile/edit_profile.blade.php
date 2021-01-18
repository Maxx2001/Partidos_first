@extends('layouts.master')

@section('content')
    <div class="border">
        <h1 class="text-6xl text-center">Edit Profile</h1>
        </div>
        <form action="{{ route('update_profile', $user) }}"
        class="border flex flex-col items-center">
            @csrf
            @method('PATCH')
            <div>
                <label for="name" class="">
                    {{ __('Name') }}:
                </label>
                <input
                    id="name"
                    type="text"
                    class="border @error('name')  border-red-500 @enderror"
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
                <label for="username" class="">
                    {{ __('Username') }}:
                </label>
                <input
                    id="username"
                    type="text"
                    class="border @error('username')  border-red-500 @enderror"
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
                <label for="phonenumber" class="">
                    {{ __('Phone Number') }}:
                </label>
                <input
                    id="phonenumber"
                    type="tel"
                    class="border @error('phonenumber')  border-red-500 @enderror"
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
            <button type="submit">Update profiel</button>

        </form>

@endsection
