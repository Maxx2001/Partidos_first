@extends('layouts.master')

@section('content')
    <div class="flex flex-col items-center h-full pt-16 ">
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
                Edit events
            </div>
        </div>

        <form action="{{ route('update_event', $event) }}" method="POST" class="mt-8" >
            @csrf
            @method('PATCH')
            <div>
                <label for="eventname" class="">
                    {{ __('Eventname') }}:
                </label>
                <input
                    id="name"
                    type="text"
                    class="border @error('eventname')  border-red-500 @enderror"
                    name="eventname"
                    value="{{ $event->eventname}}"
                    required autocomplete="eventname"
                    autofocus>

                @error('eventname')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="mt-5">
                <label for="Location" class="t-8">
                    {{ __('Location') }}:
                </label>
                <input
                    id="name"
                    type="text"
                    class="border @error('location')  border-red-500 @enderror"
                    name="location"
                    value="{{ $event->location}}"
                    required autocomplete="location"
                    autofocus>

                @error('location')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="mt-5">
                <label for="date" class="">
                    {{ __('Date') }}:
                </label>
                <input
                    id="date"
                    type="date"
                    class="border @error('date')  border-red-500 @enderror"
                    name="date"
                    value="{{ $event->date}}"
                    required autocomplete="date"
                    autofocus>

                @error('eventname')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="mt-5">
                <label for="start_time" class="">
                {{ __('Start time') }}:
                </label>
                <input
                    id="start_time"
                    type="time"
                    class="border @error('start_time')  border-red-500 @enderror"
                    name="start_time"
                    value="{{ $event->start_time}}"
                    required autocomplete="date"
                    autofocus>

                @error('eventname')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="mt-5">
                <label for="end_time" class="">
                    {{ __('End time') }}:
                </label>
                <input
                    id="end_time"
                    type="time"
                    class="border @error('end_time')  border-red-500 @enderror"
                    name="end_time"
                    value="{{ $event->end_time}}"
                    autofocus>

                @error('eventname')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="text-center mt-2">
                <button type="submit"
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
                    Edit event
                </button>
            </div>
        </form>
        <div class="h-full w-full bg-blue bg-opacity-20 mt-8">

        </div>
    </div>
@endsection
