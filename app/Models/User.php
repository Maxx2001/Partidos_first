<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class User extends Authenticatable implements Searchable
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

    public function getSearchResult(): SearchResult
    {
        $url = route('explore_friends', $this->username);

        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->username,
            $url
        );
    }

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
        $query = $this->hasMany(FriendRequest::class)
            ->where('status', '=', 2);

        return $query;
    }


}
