@extends('layouts.master')

@section('content')
    <div class="border h-64r">
        <h1 class="text-6xl text-center">Edit Profile</h1>
        </div>
        <form action="{{ route('update_profile', $user) }}"
        class="border flex flex-col items-center">
            @csrf
            @method('PATCH')
            <div>
                <label for="name" class="">
                    {{ __('Username') }}:
                </label>
                <input
                    id="username"
                    type="text"
                    class="border @error('name')  border-red-500 @enderror"
                    name="username"
                    value="{{ $user->username}}"
                    required autocomplete="name"
                    autofocus>

                @error('username')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <button type="submit">Update profiel</button>

        </form>
    </div>
@endsection




