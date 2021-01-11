@extends('layouts.master')

@section('content')
    <div class="flex mt-16 justify-center flex-wrap border ">
        <div class="m-6">
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

        <div class="m-6">
            <h1><a href="{{ route('your_invites')}}" class="
            border
            rounded-xl
            p-4
            m-4
            text-3xl"
                >Your invites
                </a>
            </h1>
        </div>


        <div class="m-6">
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

        <div class="m-6">
            <h1><a href="{{ route('create_event') }}" class="
            border
            rounded-xl
            p-4
            m-4
            text-3xl"
                >Create event
                </a>
            </h1>
        </div>


    </div>
    @endsection




