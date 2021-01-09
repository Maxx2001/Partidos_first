@extends('layouts.master')

@section('content')
    <div class="flex">
        @forelse($invitations as $invitation)
            <div class="border m-4 p-4 rounded-xl">
                <p>Eventname: {{ \App\Models\Event::find($invitation->event_id)->eventname }}</p>
                <p>Host: {{\App\Models\User::find(\App\Models\Event::find($invitation->event_id)->user_id )->username}}</p>
                <p>Locatie: {{ \App\Models\Event::find($invitation->event_id)->location }}</p>
                <p>Datum: {{ \App\Models\Event::find($invitation->event_id)->date }}</p>
                <p>Start tijd: {{ \App\Models\Event::find($invitation->event_id)->start_time }}</p>
                <p>Eind tijd: {{ \App\Models\Event::find($invitation->event_id)->end_time }}</p>
                <div class="flex">
                    <a href="{{route('accept_invite', $invitation)}}" class="border p-2 m-2 w-28 rounded">Accept invite</a>
                    <a href="{{route('decline_invite', $invitation)}}" class="border p-2 m-2 w-28 rounded">Decline invite</a>
                </div>
            </div>
        @empty
            <div class="border w-full flex justify-center mt-4">
                <p class="text-5xl">No invites yet</p>
            </div>
    @endforelse
@endsection




