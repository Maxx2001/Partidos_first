@extends('layouts.master')

@section('content')
<div class="flex border rounded-xl justify-center">
    <div class="flex flex-col">
        <p class="text-3xl text-center">Edit event</p>
        <div class="border rounded-xl p-4 m-4">
{{--            <form action="{{ route('update_event', $event) }}">--}}
            <form action="{{ route('update_event', $event) }}" method="POST">
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

                <div>
                    <label for="Location" class="">
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

                <div>
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

                <div>
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

                <div>
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
                    <button type="submit" class="border rounded-xl p-2">Update event</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
