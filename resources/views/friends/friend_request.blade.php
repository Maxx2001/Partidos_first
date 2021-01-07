@extends('layouts.master')

@section('content')
    <p class="text-center text-3xl pt-4">Friend request</p>
    <div>
        @foreach($friend_requests as $friend)
            <div class="border m-2 p-4 flex">
                <p class="m-1">Name: {{\App\Models\User::find($friend->user_id)->username}}</p>
                <form action="{{ route('accept_request', $friend) }}">
                    <input type="hidden"
                           name="friend_id"
                           value="{{\App\Models\User::find($friend->user_id)->id}}">
                    <button type="submit" class="border rounded-xl p-2">Accept request</button>
                </form>
{{--                <form action="{{ route('decline_request', $friend) }}">--}}
{{--                    <input type="hidden"--}}
{{--                           name="friend_id"--}}
{{--                           value="{{\App\Models\User::find($friend->user_id)->id}}">--}}
{{--                    <button type="submit" class="border rounded-xl p-2">Decline request</button>--}}
{{--                </form>--}}
                <p class="border rounded-xl p-2 "><a href="{{ route('decline_request', $friend) }}">Decline request</a></p>
            </div>
        @endforeach
    </div>
@endsection




