@extends('layouts.master')

@section('content')
    <div class="h-full flex flex-col">
        <div>
            <div class="w-full flex justify-center mt-8">
                    <img
                        src="{{asset('/images/profile_pictures/default.jpg')}}"
                        alt="Profile picture"
                        class="w-52 rounded-full"
                    >
            </div>
            <div class="flex m-8">
                <div class="w-1/3 flex justify-center mt-8 text-xl pl-8">
                    <i class="far fa-calendar-alt mt-1 mr-2"></i>
                    <p class="">Joined {{$user->created_at->diffForHumans()}}</p>
                </div>
                <div class="w-1/3 flex text-center flex-col">
                    <p class="text-4xl ">{{$user->username}}</p>
                    <p class="text-xl ">Aka</p>
                    <p class="text-4xl ">{{$user->name}}</p>
                </div>
                @if(auth()->user()->is($user))
                    <div class="w-1/4 flex justify-center">
                        <a href="{{route('edit_profile', $user)}}">
                            <p class="border rounded bg-blue w-56 text-center text-xl my-4 h-12 flex justify-center items-center"
                            >Edit profile
                            </p>
                        </a>
                    </div>
                @elseif(auth()->user()->isPending($user))
                    <div class="w-1/4 flex justify-center">
                        <p class="border rounded bg-blue w-56 text-center text-xl my-4 h-12 flex justify-center items-center">
                            Pending
                        </p>
                    </div>
                @elseif(auth()->user()->isFriend($user))
                    <div class="w-1/4 flex justify-center">
                        <p class="border rounded bg-blue w-56 text-center text-xl my-4 h-12 flex justify-center items-center">
                          Friends
                        </p>
                    </div>
                @else
                    <form method="POST" action="{{ route('add_friend', $user) }}" class="w-1/4 flex justify-center">
                        @csrf
                        <button class="border rounded bg-blue w-56 text-center text-xl my-4 h-12 flex justify-center items-center" type="submit">Send friend request</button>
                    </form>
                @endif
            </div>
        </div>


        <div class="h-full bg-blue bg-opacity-20">

        </div>
    </div>
@endsection


{{--{{auth()->user()->isFriend($user) ? 'Friends' : 'Send friend request'}}--}}

