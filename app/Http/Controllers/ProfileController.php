<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ProfileRequest;



class ProfileController extends Controller
{
    public function show()
    {
        return view('profile.profile', [
            'user' => User::find(auth()->id())
        ]);
    }

    public function edit()
    {
        return view('profile.edit_profile', [
            'user' => User::find(auth()->id())
        ]);
    }

    public function update(ProfileRequest $request, User $user)
    {
        $attributes = $request->validated();
        $user->update($attributes);

        return view('profile.profile', compact('user'));

    }
}
