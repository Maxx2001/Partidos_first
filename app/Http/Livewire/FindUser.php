<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Spatie\Searchable\Search;

class FindUser extends Component
{
    public $find = '';

    public function render()
    {
        $find = $this->find;
        $users = $searchResults = (new Search())
            ->registerModel(User::class, 'username')
            ->search($find);

        return view('livewire.find-user', compact('users'));
    }
}
