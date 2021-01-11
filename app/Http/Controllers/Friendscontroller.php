<?php

namespace App\Http\Controllers;

use App\Models\Friends;
use App\Models\User;
use Illuminate\Http\Request;


class Friendscontroller extends Controller
{
    public function index(User $user)
    {
        return view('friends.index', [
            'users' => User::all(),
            'friends' => User::find(auth()->id())->friends

        ]);
    }
    public function create($id)
    {
        Friends::create([
            'user_id' => auth()->id(),
            'friend_id' => $id,
            'status' => 1
        ]);
        return view('friends.index',[
            'users' => User::all()
        ]);
    }
    public function show()
    {
        $friend_list = [];

        $friends = User::find(auth()->id())
            ->friends
        ->where('status', "=", "2");

        foreach ($friends as $friend) {
            $friend_list[] = User::find($friend->friend_id);
        };

        return view('friends.friend_list', compact('friends'));
    }

    public function show_friend_request()
    {
        $user_list= [];

        $friends = Friends::all()
            ->where("friend_id", "=", auth()->id())
            ->where('status', '=', 1);

//        foreach ($friends as $user)
//        {
//            $user_list[] = User::find($user->user_id);
//        }

        return view('friends.friend_request', compact('friends'));
//        return view('friends.friend_request', [
//            'user_list' => $user_list,
//            'friend_requests' => $friends
//        ]);

    }

    public function accept_request(Friends $friends,Request $request, $id)
    {
        $friends = Friends::find($id);

        $friends->status = 2;
        $friends->save();

        Friends::create([
            'user_id' => auth()->id(),
            'friend_id' => $request['friend_id'],
            'status' => 2
        ]);

        return redirect('/show_friend_request');
    }

    public function decline_request(Friends $friends, $id)
    {
        $friends = Friends::find($id);

        $friends->status = 3;
        $friends->save();

        return redirect('/show_friend_request');
    }

    public function destroy($id)
    {
        $friend = Friends::find($id);
        Friends::destroy($id);
        return redirect('/friends');
    }

}
