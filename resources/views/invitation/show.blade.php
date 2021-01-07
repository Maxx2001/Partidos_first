@extends('layouts.master')

@section('content')
    <div class="flex justify-center">
        <div class="flex flex-col">
            <h1 class="text-3xl pt-12">Invitation list</h1>
            @foreach($invitations as $invitation)
                <p class="text-center">{{\App\Models\User::find($invitation->user_id)->username}}</p>
                <form action="/invitation/{{$invitation->id}}" method="POST">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="border p-2 m-2 rounded">Delete inventation</button>
                </form>
            @endforeach
        </div>
    </div>
@endsection




