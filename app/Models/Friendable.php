<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use PhpParser\Builder;

trait Friendable
{
    public function friends()
    {
        return $this->hasMany(FriendRequest::class)
            ->where('status', '=', 2)
            ->where('user_id', '=', auth()->id())
            ->orWhere('friend_id', '=', auth()->id());
    }

    public function friend()
    {
        return $this->hasMany(FriendRequest::class)
            ->where('status', '=', 2);
    }

    public function isPending(User $user)
    {
        return $this->hasMany(FriendRequest::class)
            ->where('friend_id', '=', $user->id)
            ->where('status', '=', 1)
            ->exists();
    }

    public function isFriends($user)
    {
        return $this->hasMany(FriendRequest::class)
            ->where(function ($query) use ($user) {
                $query->where('friend_id', '=',  $user->id)
                ->Where('user_id', '=', auth()->id());
            })
            ->orWhere(function ($query) use ($user) {
                $query->where('user_id', '=',  $user->id)
                    ->Where('friend_id', '=', auth()->id());
            })
            ->where('status', '=', 2)
            ->exists();
    }

    public function hasFrendRequest($user)
    {
        return $this->hasMany(FriendRequest::class)
            ->where(function ($query) use ($user) {
                $query->where('friend_id', '=',  $user->id)
                    ->Where('user_id', '=', auth()->id());
            })
            ->orWhere(function ($query) use ($user) {
                $query->where('user_id', '=',  $user->id)
                    ->Where('friend_id', '=', auth()->id());
            })
            ->where('status', '=', 1)
            ->exists();
    }
}
