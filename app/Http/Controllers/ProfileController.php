<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


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

    public function update()
    {

    }
}
