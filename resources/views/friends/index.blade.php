@extends('layouts.master')

@section('content')
    <div>
        <p class="text-6xl text-center">Explore friends</p>
        <div class="flex flex-col items-center">
            @foreach($users as $user)
                @if(auth()->user()->isnot($user))
                    <p class="text-3xl">{{ $user -> username }}</p>
                    <p>{{ $user -> id }}</p>
                    <a href="{{ route('add_friend', $user) }}" class="border rounded-xl m-4 p-4">
                        Add friend
                    </a>
                @endif


            @endforeach

        </div>
    </div>
@endsection
