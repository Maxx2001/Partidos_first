@extends('layouts.master')

@section('content')
    <div class="flex justify-center mt-16 ">
        <div class="
       border
            rounded-xl
            text-3xl
             p-4
             w-96
             h-12
             flex
             justify-center
             items-center
             bg-gray-light">
            Your friends
        </div>
    </div>

    <div class=" flex  justify-center flex-wrap w-full mt-12">
        @forelse($friends as $friend)
            <a href="{{route('profile', $friend)}}">
                <div class=" w-32 h-40 m-4 flex flex-col items-center  mx-20">
                    <img
                        src="{{asset('/images/profile_pictures/default.jpg')}}"
                        alt="Profile picture"
                        class="w-36 rounded-3xl"
                    >
                    <p class="text-3xl text-center mt-4">
                        {{$friend->username}}
                    </p>
                </div>
            </a>
        @empty
            <div class="border w-full flex justify-center mt-4">
                <p class="text-5xl">
                    No friends yet
                </p>
            </div>
        @endforelse

    </div>
@endsection
