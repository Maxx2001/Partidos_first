@extends('layouts.master')

@section('content')
    <p class="text-center text-3xl pt-4">Friend request</p>
        @foreach($friends as $friend)
            <div class="border m-2 p-4 flex">
                <p class="m-1">Name:{{\App\Models\User::find($friend->friend_id)->username}}</p>
                <form action="{{ route('accept_request', $friend) }}">
                    <input type="hidden"
                           name="friend_id"
                           value="{{$friend->user_id}}">
                    <button type="submit" class="border rounded-xl p-2">Accept request</button>
                </form>
                <p class="border rounded-xl p-2 "><a href="{{ route('decline_request', $friend) }}">Decline request</a></p>
            </div>

        @endforeach


@endsection



