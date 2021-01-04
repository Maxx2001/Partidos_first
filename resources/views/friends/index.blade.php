@extends('layouts.master')

@section('content')
    <div>
        <p class="text-6xl text-center">Friends</p>
        <div class="flex flex-col items-center">
            @foreach($users as $user)
                <p>{{ $user -> username }}</p>

                <form action="{{ route('add_friend') }}" method="POST">
                    @csrf
                        <input
                            type="hidden"
                            name="user_two_id"
                            value="{{ $user->username}}"
                          >
                    <button type="submit" class="">Add friend</button>
                </form>

            @endforeach
        </div>
    </div>
@endsection
