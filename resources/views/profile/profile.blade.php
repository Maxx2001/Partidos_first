@extends('layouts.master')

@section('content')
    <div class="border w-full h-64r">
        <h1 class="text-6xl text-center">Profile</h1>
        <div class="w-full h-2/3 flex flex-col items-center">
                <p class="text-4xl">{{$user->username}}</p>
                <p class="text-4xl">{{$user->name}}</p>
            <a href="{{ route('edit_profile') }}" class="border m-2 p-2 rounded-2xl">Edit profile</a>
        </div>
    </div>
@endsection




