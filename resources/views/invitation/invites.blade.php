@extends('layouts.master')

@section('content')
    <div class="flex">
        @forelse($events as $event)
            <div class="border m-4 p-4 rounded-xl">
                <p>Eventname: {{$event->eventname }}</p>
                <p>Host: {{\App\Models\User::find($event->user_id)->username}}</p>
                <p>Locatie: {{ $event->location }}</p>
                <p>Datum: {{ $event->date }}</p>
                <p>Start tijd: {{ $event->start_time }}</p>
                <p>Eind tijd: {{ $event->end_time }}</p>
                <div class="flex">
                    <a href="/invitation/{{ $event->id }}" class="border p-2 m-2 w-28 rounded">Invitation list</a>
                </div>
                <div class="flex">
                    <a href="{{route('accept_invite', $event)}}" class="border p-2 m-2 w-28 rounded">Accept invite</a>
                    <a href="{{route('decline_invite', $event)}}" class="border p-2 m-2 w-28 rounded">Decline invite</a>
                </div>
            </div>
        @empty
            <div class="border w-full flex justify-center mt-4">
                <p class="text-5xl">No invites yet</p>
            </div>
    @endforelse
@endsection




