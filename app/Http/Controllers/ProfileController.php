<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function show()
    {
        return view('profile.profile', [
            'user' => Auth::user()
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
