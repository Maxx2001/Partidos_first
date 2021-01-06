@extends('layouts.master')

@section('content')
    <div class="border rounded-xl">
        @foreach($friends as $friend)
            <div class="border m-2 p-4 flex">
                <p class="m-1">Name: {{\App\Models\User::find($friend->friend_id)->username}}</p>
                <form action="{{route('remove_friend', $friend)}}" method="POST">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="border p-2 28 rounded-xl">Remove friend</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
