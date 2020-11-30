@extends('layouts.master')

@section('content')
    <div class="border w-full h-64r">
        <h1 class="text-6xl text-center">Profile</h1>
        <div class="w-full h-2/3 flex flex-col items-center">
                <p class="text-4xl">{{$user->username}}</p>
                <p class="text-4xl">{{$user->name}}</p>
            <a href="{{ route('edit_profile', $user) }}" class="border m-2 p-2 rounded-2xl">Edit profile</a>
        </div>
        <form method="POST" action="{{ route('update_profile', $user) }}">
            @csrf
            @method('PATCH')
            <div>
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    {{ __('Name') }}:
                </label>

                <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
        </form>
    </div>
@endsection




