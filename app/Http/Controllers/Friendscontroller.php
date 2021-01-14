<?php

namespace App\Http\Controllers;

use App\Models\FriendRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Friendscontroller extends Controller
{
    public function index(User $user)
    {
        return view('friends.index', [
            'users' => User::all(),
        ]);
    }
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

        return view('friends.index',[
            'users' => User::all()
        ]);
    }
    public function show()
    {
        $friends = [];

        $friend_list = Auth::user()
            ->friends
            ->where('status', "=", "2");


        foreach ($friend_list as $friend)
        {
            if ($friend->user_id == auth()->id())
            {
                $friend->user_id = $friend->friend_id;
            }
            $friends[] = User::find($friend->user_id);
        }

        return view('friends.friend_list', compact('friends'));
    }

    public function show_friend_request()
    {
        $user_list= [];

        $friends = FriendRequest::all()
            ->where("friend_id", "=", auth()->id())
            ->where('status', '=', 1);

        return view('friends.friend_request', compact('friends'));
    }

    public function accept_request(FriendRequest $friends, Request $request, $id)
    {
        $friends = FriendRequest::find($id);

        $friends->status = 2;
        $friends->save();

        return redirect('/show_friend_request');
    }

    public function decline_request(FriendRequest $friends, $id)
    {
        $friends = FriendRequest::find($id);

        $friends->status = 3;
        $friends->save();

        return redirect('/show_friend_request');
    }

    public function destroy($id)
    {
        $friend = FriendRequest::find($id);
        FriendRequest::destroy($id);
        return redirect('/friends');
    }

}
