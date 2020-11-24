@extends('layouts.master')

@section('content')
    <form method="POST" action="create">
        <div class="flex flex-col justify-center items-center">
            @csrf
            <div class="p-3">
                <label for="location">location:</label>
                <input type="text" name="location" class="border">
            </div>
            @error('location')
                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
            @enderror

            <div class="p-3">
                <label for="eventname">Eventname: </label>
                <input type="text" name="eventname" class="border">
            </div>
            @error('eventname')
                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
            @enderror

            <div class="p-3">
                <label for="date">Datum:</label>
                <input type="date" name="date" class="border">
            </div>
            @error('date')
                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
            @enderror

            <div class="p-3">
                <label for="start_time">Start tijd:</label>
                <input type="time" name="start_time" class="border">
            </div>
            @error('start_time')
                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
            @enderror

            <div class="p-3">
                <label for="end_time">Eindtijd:</label>
                <input type="time" name="end_time" class="border">
            </div>
            @error('end_time')
            <p class="text-red-500 text-sm mt-2">{{$message}}</p>
            @enderror

            <button type="post" class="border h-8">Create event</button>
        </div>
    </form>
    @endsection


</style>


