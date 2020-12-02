<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


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

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => [
                'string',
                'max:255',
                Rule::unique('users')->ignore($user)
            ],
            'username' => [
                'string',
                'max:255',
                'alpha_dash',
                Rule::unique('users')->ignore($user)
            ],
            'phonenumber' => [
                'numeric',
                'digits:10',
                Rule::unique('users')->ignore($user)
            ],
            'email' => [
                'email',
                'max:255',
                Rule::unique('users')->ignore($user)
            ],
            'password' => [
                'string',
                'min:4',
                'confirmed',
                Rule::unique('users')->ignore($user)
            ],
        ]);

        $user->update($attributes);

        return redirect('/agenda');

    }
}
