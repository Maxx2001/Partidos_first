<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $friend = auth()->user()->friend($user);


        return view('profile.profile', [
            'user' => $user,
            'friend' => $friend
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
