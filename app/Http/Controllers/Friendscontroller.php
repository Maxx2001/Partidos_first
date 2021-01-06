<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Friends;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'status' => '1'
        ]);
        return view('friends.index',[
            'users' => User::all()
        ]);
    }
    public function show()
    {
        return view('friends.friend_list', [
            'friends' => User::find(auth()->id())->friends
        ]);
    }

    public function destroy($id)
    {
        Friends::destroy($id);

        return redirect('/friends');
    }

}
