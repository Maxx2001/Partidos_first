@extends('layouts.master')

@section('content')
    <div class="border rounded-xl">
        @forelse($friends as $friend)
            <div class="border m-2 p-4 flex">
{{--                <p class="m-1">Name: {{\App\Models\User::find($friend->friend_id)->username}}</p>--}}
                <p class="m-1">Name:{{ $friend->username }}</p>
{{--                <form action="{{route('remove_friend', $friend)}}" method="POST">--}}
{{--                    @csrf--}}
{{--                    <input name="_method" type="hidden" value="DELETE">--}}
{{--                    <button class="border p-2 28 rounded--xl">Remove friend</button>--}}
{{--                </form>--}}
            </div>
        @empty
            <div class="border w-full flex justify-center mt-4">
                <p class="text-5xl">No friends yet</p>
            </div>
        @endforelse
    </div>
    <div class="mt-16">
        <a class="border-2 m-3 py-2 px-4 rounded-2xl text-3xl" href="{{ route('show_friend_request')}}">Friend requests</a>
        <a class="border-2 m-3 py-2 px-4 rounded-2xl text-3xl" href="{{ route('explore_friends')}}">Explore users</a>

    </div>
@endsection
