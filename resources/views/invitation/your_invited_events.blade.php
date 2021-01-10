@extends('layouts.master')

@section('content')
    <div class="flex">
    @forelse($events as $invitation)
        <div class="border m-4 p-4 rounded-xl">
            <p>Eventname: {{$invitation->eventname }}</p>
            <p>Host: {{\App\Models\User::find($invitation->user_id)->username}}</p>
            <p>Locatie: {{ $invitation->location }}</p>
            <p>Datum: {{ $invitation->date }}</p>
            <p>Start tijd: {{ $invitation->start_time }}</p>
            <p>Eind tijd: {{ $invitation->end_time }}</p>
            <div class="flex">
                <a href="/invitation/{{ $invitation->id }}" class="border p-2 m-2 w-28 rounded">Invitation list</a>
        </div>
    </div>
    @empty
        <div class="border w-full flex justify-center mt-4">
            <p class="text-5xl">No events yet</p>
        </div>
    @endforelse

@endsection




