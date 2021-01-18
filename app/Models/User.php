<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class User extends Authenticatable implements Searchable
{
    use HasFactory, Notifiable, Friendable, Inviting, FriendSearchable;

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

    public function isPending(User $user)
    {
        return $this->hasMany(FriendRequest::class)
            ->where('friend_id', $user->id)
            ->where('status', '=', 1)
            ->exists();
    }

    public function isFriend(User $user)
    {
        return $this->friend()->where('friend_id', $user->id)
            ->where('status', '=', 2)
            ->exists();
    }



}
