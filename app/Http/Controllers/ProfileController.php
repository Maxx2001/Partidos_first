<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public $friends = [];

    public function show($id)
    {
        $friends = auth()->user()->friends;

        return view('profile.profile', [
            'user' => User::find($id),
            'friends' => $friends
        ]);
    }

    public function edit()
    {
        return view('profile.edit_profile', [
            'user' => Auth::user()
        ]);
    }

    public function update(ProfileRequest $request, User $user)
    {
        $attributes = $request->validated();
        $user->update($attributes);

        return view('profile.profile', compact('user'));

    }
}
