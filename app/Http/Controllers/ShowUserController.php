<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Searchable\Search;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;


class ShowUserController extends Controller
{
    public function index(Search $search)
    {
        $find = '';

        $users = $searchResults = (new Search())
            ->registerModel(User::class, 'username')
            ->search($find);
//        return $users;

        return view('friends.index', compact('users'));
    }
}
