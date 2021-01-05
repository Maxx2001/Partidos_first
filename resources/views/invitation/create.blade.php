@extends('layouts.master')

@section('content')
        <div class="flex justify-center">
            <h1 class="text-3xl pt-12">Invite your friends</h1>
        </div>
        <div class="flex justify-center">
            <form action="" method="POST">
                @csrf
                <label for="id">Friend</label>
            </form>
        </div>
        @foreach($friends as $friend)
            <div class="border m-2 p-4">
                <p class="m-1">Name: {{\App\Models\User::find($friend->friend_id)->username}}</p>
            </div>
        @endforeach
@endsection




