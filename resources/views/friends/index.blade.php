@extends('layouts.master')

@section('content')
    <head>
        @livewireStyles
    </head>
    <div>
        <livewire:find-user />
        @livewireScripts
    </div>
@endsection
