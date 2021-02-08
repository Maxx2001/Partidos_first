<?php

namespace App\Http\Controllers;

use App\Models\FriendRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Friendscontroller extends Controller
{
    public function create($id)
    {
        $friend = FriendRequest::create([
            'user_id' => auth()->id(),
            'friend_id' => $id,
            'status' => 1
        ]);

        activity()
            ->performedOn($friend)
            ->causedBy(auth()->id())
            ->withProperties($friend->toArray())
            ->log('Een vriendschaps verzoek');

        return Redirect::back();
    }
    public function show()
    {
        $friends = [];

        $friend_list = Auth::user()->friends;

        foreach ($friend_list as $friend) {
            if ($friend->user_id == auth()->id()) {
                $friend->user_id = $friend->friend_id;
            }
            $friends[] = User::find($friend->user_id);
        }

        return view('friends.friend_list', compact('friends'));
    }

    public function accept_request(FriendRequest $friends, Request $request, $id)
    {
        $friends = FriendRequest::find($id);

        $friends->status = 2;
        $friends->save();

        return Redirect::back();
    }

    public function decline_request(FriendRequest $friends, $id)
    {
        FriendRequest::destroy($id);

        return Redirect::back();
    }

    public function destroy($friend)
    {
        $friend_request = FriendRequest::find($friend)->id;
        FriendRequest::destroy($friend_request);

        return redirect('/friends');
    }

}
