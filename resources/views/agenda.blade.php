@extends('layouts.master')

@section('content')
    <div class="flex">
      @forelse($event as $data)
         <div class="border m-2">
             <p class="m-1">Eventname: {{$data->eventname}}</p>
             <p class="m-1">Host: {{$data->user_id}}</p>
             <p class="m-1">Locatie: {{$data->location}}</p>
             <p class="m-1">Datum: {{$data->date}}</p>
             <p class="m-1">Start tijd: {{$data->start_time}}</p>
             <p class="m-1">Eind tijd: {{$data->end_time}}</p>
             <a href="/event/{{$data->id}}/edit" class="border">Edit event</a>
             <form action="{{route('delete_event', $data)}}" method="POST">
                 @csrf
                 <input name="_method" type="hidden" value="DELETE">
                 <button class="border">Delete</button>
             </form>
{{--             <a href="/event/{{$data->id}}" class="border">Delete event</a>--}}
         </div>
        @endforeach
    </div>
    @endsection




