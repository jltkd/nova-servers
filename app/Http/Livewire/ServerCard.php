<?php

namespace App\Http\Livewire;

use App\Models\Server;
use Livewire\Component;

class ServerCard extends Component
{
    public $server;

    public function mount(Server $server)
    {
        $this->server = $server;
    }

    public function render()
    {
        return view('livewire.server-card');
    }
}
