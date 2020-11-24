@extends('layouts.master')

@section('content')
    <div class="flex">
      @forelse($event as $data)
         <div class="border m-2">
             <p class="m-1">Eventname: {{$data->eventname}}</p>
             <p class="m-1">Host: {{$data->host}}</p>
             <p class="m-1">Locatie: {{$data->location}}</p>
             <p class="m-1">Datum: {{$data->date}}</p>
             <p class="m-1">Start tijd: {{$data->start_time}}</p>
             <p class="m-1">Eind tijd: {{$data->end_time}}</p>
             <a href="{{ route('edit_event', $data) }}" class="border">Edit event</a>
             <a href="{{ route('delete', $data) }}" class="border">Delete event</a>
         </div>
        @endforeach
    </div>
    @endsection




