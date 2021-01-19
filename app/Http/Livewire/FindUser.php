<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Spatie\Searchable\Search;

class FindUser extends Component
{
    public $search = '';

    public function render()
    {
        $users = (new Search())
            ->registerModel(User::class, 'username')
            ->search($search = $this->search);
        return view('livewire.find-user', compact('users'));
    }
}

