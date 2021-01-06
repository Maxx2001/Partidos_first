@extends('layouts.master')

@section('content')
    <div class="flex mt-16 justify-center">
        <div>
            <h1><a href="{{ route('your_created_events')}}" class="
            border
            rounded-xl
            p-4
            m-4
            text-3xl"
                >Your created events
                </a>
            </h1>
        </div>

        <div>
            <h1><a href="{{ route('your_invited_events') }}" class="
            border
            rounded-xl
            p-4
            m-4
            text-3xl"
                >Your invited events
                </a>
            </h1>
        </div>

    </div>
    @endsection




