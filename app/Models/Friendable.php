<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;

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

//    public function friendRequest()
//    {
//        return $this->hasMany(FriendRequest::class)
//            ->where('friend_id', '=', auth()->id())
//            ->where('status', '=', 1);
////            ->orWhere('friend_id', '=', auth()->id());
//    }
}
