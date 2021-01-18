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
                Events
            </div>
            <div class="flex justify-center items-center">
                <a href="{{ route('create_event') }}"
                   class="border
                   rounded-2xl
                   text-2xl
                   items-center
                   flex
                   h-12
                   absolute
                   ml-80
                   p-4
                   w-48
                    bg-blue"
                >New event
                    <i class="fas fa-plus"></i></a>
            </div>
        </div>

{{--    <div class="flex p-4 justify-center  flex-wrap">--}}
{{--        @forelse($events as $event)--}}

{{--            @if($event->user_id == \Illuminate\Support\Facades\Auth::id())--}}
{{--                <p>Test</p>--}}
{{--            @endif--}}
{{--            <div class="text-2xl py-4 px-12 w-2/5">--}}
{{--                <a href="{{ route('event', $event) }}">--}}
{{--                    <div class="--}}
{{--                    border--}}
{{--                    rounded--}}
{{--                    h-10--}}
{{--                    pl-6--}}
{{--                     flex--}}
{{--                      items-center--}}
{{--                      bg-blue">--}}
{{--                        {{$event->eventname}}--}}
{{--                    </div>--}}

{{--                    <div class="border rounded p-2 bg-gray-light">--}}
{{--                        <div class="px-4 py-2">--}}
{{--                            <p> <i class="far fa-user"></i>--}}
{{--                                {{\App\Models\User::find($event->user_id)->username}}</p>--}}
{{--                        </div>--}}
{{--                        <div class="px-4 px-2">--}}
{{--                            <p> <i class="far fa-calendar"></i> {{$event->date}}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--        @empty--}}
{{--            <p>No events yet</p>--}}
{{--        @endforelse--}}
{{--    </div>--}}

        <livewire:events />

    @endsection




