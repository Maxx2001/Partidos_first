@extends('layouts.master')

@section('content')
    <div class="flex">
        @forelse($event as $data)
            <div class="border m-4 p-4 rounded-xl">
                <p class="m-1">Event id: {{$data->id}}</p>
                <p class="m-1">Eventname: {{$data->eventname}}</p>
                <p class="m-1">Locatie: {{$data->location}}</p>
                <p class="m-1">Datum: {{$data->date}}</p>
                <p class="m-1">Start tijd: {{$data->start_time}}</p>
                <p class="m-1">Eind tijd: {{$data->end_time}}</p>
                <div class="flex">
                    <a href="/event/{{$data->id}}/edit" class="border p-2 m-2 w-28 rounded">Edit event</a>
                    <form action="{{route('delete_event', $data)}}" method="POST">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="border p-2 m-2  w-28 rounded">Delete event</button>
                    </form>
                </div>
                <div class="flex">
                    <a href="/invitation" class="border p-2 m-2 w-28 rounded">Invention list</a>
                    <a href="/invitation/create/{{ $data->id }}" class="border p-2 m-2 w-28 rounded">Invite friends</a>
                </div>
            </div>
        @empty
            <div class="border w-full flex justify-center mt-4">
                <p class="text-5xl">No events yet</p>
            </div>
    @endforelse
@endsection




{{--            <div class="flex justify-center">--}}
{{--                <a href="/event/{{$data->id}}/edit" class="border p-2 m-2 w-28 rounded">Edit event</a>--}}
{{--                <form action="{{route('delete_event', $data)}}" method="POST">--}}
{{--                    @csrf--}}
{{--                    <input name="_method" type="hidden" value="DELETE">--}}
{{--                    <button class="border p-2 m-2  w-28 rounded">Delete event</button>--}}
{{--                </form>--}}

{{--            </div>--}}

{{--            <div class="flex justify-center"></div>--}}
{{--            <a href="/invitation" class="border p-2 m-2 w-28 rounded">Invention list</a>--}}
{{--            <a href="/invitation" class="border p-2 m-2 w-28 rounded">Invite friends</a>--}}

{{--    </div>--}}
