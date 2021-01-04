<?php

namespace App\Http\Controllers;

use App\Models\Friends;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Friendscontroller extends Controller
{
    public function index(User $user)
    {
        return view('friends.index', [
            'users' => User::all()
        ]);
    }
    public function create(Request $request, Friends $friends)
    {
    }
}
