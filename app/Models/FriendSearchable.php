<?php

namespace App\Models;


use Spatie\Searchable\SearchResult;

trait FriendSearchable
{

    public function getSearchResult(): SearchResult
    {
        $url = route('explore_users', $this->username);

        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->username,
            $url
        );
    }
}
