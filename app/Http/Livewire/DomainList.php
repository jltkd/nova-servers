<?php

namespace App\Http\Livewire;

use App\Models\Domain;
use Livewire\Component;
use Livewire\WithPagination;

class DomainList extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        return view('livewire.domain-list', [
            'domains' => Domain::search('name', $this->search)->paginate(25),
        ]);
    }
}
