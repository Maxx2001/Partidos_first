@extends('layouts.master')

@section('content')
    <div class="flex mt-16 justify-center">
        <div>
            <h1><a href="{{ route('created_events', auth()->id()) }}" class="
            border
            rounded-xl
            p-4
            m-4
            text-3xl"
                >You're created events
                </a>
            </h1>
        </div>

        <div>
            <h1><a href="#" class="
            border
            rounded-xl
            p-4
            m-4
            text-3xl"
                >You're invited events
                </a>
            </h1>
        </div>

    </div>
    @endsection




