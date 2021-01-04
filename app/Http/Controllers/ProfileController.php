<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ProfileRequest;



class ProfileController extends Controller
{
    public function show($id)
    {
        return view('profile.profile', [
            'user' => User::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('profile.edit_profile', [
            'user' => User::find($id)
        ]);
    }

    public function update(ProfileRequest $request, User $user, $id)
    {
        $attributes = $request->validated();

        $user->update($attributes);

        return redirect('/profile');

    }
}
