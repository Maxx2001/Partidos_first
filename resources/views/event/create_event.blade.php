@extends('layouts.master')

@section('content')
    <div class="flex flex-col h-full justify-center mt-16 ">
        <div class="flex justify-center">
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
                Create events
            </div>
        </div>
        <form method="POST" action="{{ route('create') }}">
            <div class="flex flex-col justify-center items-center mt-8">
                @csrf
                <div class="p-3">
                    <label for="eventname">Eventname: </label>
                    <input
                        type="text"
                        name="eventname"
                        value="{{ old('eventname') }}"
                        required autocomplete="eventname"
                        class="border">
                </div>
                @error('eventname')
                <p class="text-red-500 text-sm mt-2">
                    {{$message}}
                </p>
                @enderror

                <div class="p-3">
                    <label for="location">location:</label>
                    <input
                        type="text"
                        name="location"
                        value="{{ old('location') }}"
                        required autocomplete="location"
                        autofocus class="border">
                </div>
                @error('location')
                <p class="text-red-500 text-sm mt-2">
                    {{$message}}
                </p>
                @enderror

                <div class="p-3">
                    <label for="date">Datum:</label>
                    <input
                        type="date"
                        name="date"
                        value="{{ old('date') }}"
                        required autocomplete="date"
                        class="border">
                </div>
                @error('date')
                <p class="text-red-500 text-sm mt-2">
                    {{$message}}
                </p>
                @enderror

                <div class="p-3">
                    <label for="start_time">Start tijd:</label>
                    <input
                        type="time"
                        name="start_time"
                        value="{{ old('start_time') }}"
                        required autocomplete="start_time"
                        class="border">
                </div>
                @error('start_time')
                    <p class="text-red-500 text-sm mt-2">
                        {{$message}}
                    </p>
                @enderror

                <div class="p-3">
                    <label for="end_time">Eindtijd:</label>
                    <input
                        type="time"
                        name="end_time"
                        value="{{ old('end_time') }}"
                        class="border">
                </div>

                @error('end_time')
                <p class="text-red-500 text-sm mt-2">
                    {{$message}}
                </p>
                @enderror

                <button type="post"
                        class="
                        border
                        mt-4
                        border
                        rounded
                        bg-blue
                        w-56
                        text-center
                        text-xl
                        my-4
                        h-12
                        flex
                        justify-center
                        items-center">
                    Create event
                </button>
            </div>
        </form>

        <div class="h-full bg-blue bg-opacity-20 mt-8">

        </div>
    </div>
@endsection




