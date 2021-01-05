@extends('layouts.master')

@section('content')
    <div class="border rounded-xl">
        @foreach($friends as $friend)
            <div class="border m-2 p-4">
                <p class="m-1">Name: {{\App\Models\User::find($friend->friend_id)->username}}</p>
            </div>
            @endforeach

    </div>
@endsection
