<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Spatie\Searchable\Search;

class d extends Component
{
    public $find = '';

    public function render()
    {
        $users = $searchResults = (new Search())
            ->registerModel(User::class, 'username')
            ->search($this->find);
//        return $users;

//        return view('friends.index', compact('users'));
        return view('friends.index', [
            'users' => $users,
            'find' => $this->find
        ]);
    }
}
