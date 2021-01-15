@extends('layouts.master')

@section('content')
    <div class="flex justify-center">
        <h1 class="text-3xl pt-12">Invite your friends</h1>
    </div>
    @foreach($friends as $friend)
        <form action="\invitation" method="POST">
            @csrf
            <input type="hidden" name="friend_id" value="{{ $friend->id }}">
            <input type="hidden" name="event_id" value="{{ $event_id}}">
            <button type="post" class="border rounded-xl p-2 m-2">Name: {{$friend->username}}
            </button>
        </form>

    @endforeach
@endsection




