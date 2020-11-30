@extends('layouts.master')

@section('content')
    <h1 class="text-6xl text-center">Timeline</h1>

    <div class="flex flex-col justify-center items-center">
        @forelse($event as $data)
            <div class="border m-2 p-4">
                <p class="m-1">Eventname: {{$data->eventname}}</p>
                <p class="m-1">Host: {{$data->host}}</p>
                <p class="m-1">Locatie: {{$data->location}}</p>
                <p class="m-1">Datum: {{$data->date}}</p>
                <p class="m-1">Start tijd: {{$data->start_time}}</p>
                <p class="m-1">Eind tijd: {{$data->end_time}}</p>
            </div>
            @endforeach
    </div>
@endsection


</style>


