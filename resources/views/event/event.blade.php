@extends('layouts.master')

@section('content')
    <div class=" h-32 flex justify-center items-center mt-8">
        <h1 class="
        border
        rounded-xl
        text-3xl
        w-96
        h-12
        flex
        justify-center
        items-center
        bg-gray-light">Event details</h1>
    </div>
    <div class="flex">
        <div class="text-2xl py-10 px-12 w-2/5 mt-20">
                <div class="
                    border
                    rounded
                    h-10
                    pl-6
                    flex
                    items-center
                    bg-blue">
                    {{$event->eventname}}
                </div>

                <div class="border rounded p-2 bg-gray-light">
                    <div class="px-4 pt-2">
                        <a href="{{route('profile', \App\Models\User::find($event->user_id))}}">
                            <i class="far fa-user"></i>
                                {{\App\Models\User::find($event->user_id)->username}}
                        </a>
                    </div>
                    <div class="px-4">
                        <p> <i class="fas fa-map-marker-alt"></i> {{$event->location}}</p>
                    </div>

                    <div class="px-4">
                        <p> <i class="far fa-clock"></i> {{$event->start_time}} - {{$event->end_time}}</p>
                    </div>

                    <div class="px-4">
                        <p> <i class="far fa-calendar"></i> {{$event->date}}</p>
                    </div>
                </div>
            @if($event->user_id == \Illuminate\Support\Facades\Auth::id())
                <div class="mt-4">
                    <a href="{{ route('edit_event', $event) }}">
                        <p class="
                        border
                        rounded
                         p-2
                         text-center
                          text-4xl
                           bg-blue
                           bg-opacity-80"
                        >Edit event
                        </p>
                    </a>

                    <a href="{{ route('invite_friends', $event) }}">
                        <p class="
                        border
                         rounded
                         p-2
                         text-center
                         text-4xl
                          bg-blue
                          bg-opacity-80
                          mt-4"
                        >Invite friends
                        </p>
                    </a>
                </div>
            @endif
        </div>

        <div class=" w-7/12">
            <div class="
            flex
            justify-center">
                <p class="
                border
                rounded-xl
                text-center
                text-3xl
                py-4
                w-48
                bg-blue
                bg-opacity-80"
                >
                    Participant
                </p>
            </div>
            <div class="flex justify-center pt-8">
                @livewire('participants', ['events' => $event])
            </div>
        </div>
    </div>
@endsection

