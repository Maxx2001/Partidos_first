<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function friends()
    {
        return $this->hasMany(FriendRequest::class)
            ->where('status', '=', 2)
            ->where('user_id', '=', auth()->id())
            ->orWhere('friend_id', '=', auth()->id());
    }

    public function inventations()
    {
        return $this->hasMany(Invitation::class);
    }

    public function friend()
    {
       return $this->hasManyThrough(FriendRequest::class, User::class);
//            ->when('id' === auth()->id() , function () {
//                $this->hasMany(FriendRequest::class)
//                    ->where('status', '=', 2);
//            });
    }
}
