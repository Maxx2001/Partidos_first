@extends('layouts.master')

@section('content')

        <div class="flex justify-center mt-16 ">
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
                Events
            </div>
            <div class="flex justify-center items-center">
                <a href="{{ route('create_event') }}"
                   class="border
                   rounded-2xl
                   text-2xl
                   items-center
                   flex
                   h-12
                   absolute
                   ml-80
                   p-4
                   w-48
                    bg-blue"
                >New event
                    <i class="fas fa-plus"></i></a>
            </div>
        </div>

        <livewire:events />

    @endsection




