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

    public function mount(Server $server)
    {
        $this->server = $server;
    }

    public function render()
    {
        return view('livewire.server-domain-list', [
            'domains' => Domain::where('server_id', $this->server->id)->paginate(25)
        ]);
    }
}
