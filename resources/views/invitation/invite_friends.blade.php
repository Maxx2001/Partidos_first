@extends('layouts.master')

@section('content')
    <div class="flex justify-center mt-16">
        <h1 class="border
                rounded-xl
                text-3xl
                 p-4
                 w-96
                 h-12
                 flex
                 justify-center
                 items-center
                 bg-gray-light">
            Invite your friends</h1>
    </div>
    <div class=" flex  justify-center flex-wrap w-full mt-12">
        @foreach($friends as $friend)
            <form action="\invitation" method="POST">
                @csrf
                <input type="hidden" name="friend_id" value="{{ $friend->id }}">
                <input type="hidden" name="event_id" value="{{ $event_id}}">
                <button type="post" class="w-32 h-40 m-4 flex flex-col items-center mx-20">
                    <div class=" w-32 h-40 m-4 flex flex-col items-center  mx-20">
                        <img
                            src="{{asset('/images/profile_pictures/default.jpg')}}"
                            alt="Profile picture"
                            class="w-36 rounded-3xl"
                        >
                        <p class="text-3xl text-center mt-4">{{$friend->username}}</p>
                    </div>
                </button>
            </form>

        @endforeach
    </div>
@endsection




