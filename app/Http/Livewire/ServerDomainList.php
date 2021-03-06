<?php

namespace App\Http\Livewire;

use App\Models\Domain;
use App\Models\Server;
use Livewire\Component;
use Livewire\WithPagination;

class ServerDomainList extends Component
{
    use WithPagination;

    public $server;
    public $search = '';

    public function mount(Server $server)
    {
        $this->server = $server;
    }

    public function render()
    {
        return view('livewire.server-domain-list', [
            'domains' => Domain::search('name', $this->search)
                ->where('server_id', $this->server->id)
                ->orderby('name', 'ASC')
                ->paginate(25)
        ]);
    }
}
