<?php

namespace App\Http\Livewire;

use App\Models\Server;
use Livewire\Component;

class ServerCards extends Component
{
    public function render()
    {
        return view('livewire.server-cards', [
            'servers' => Server::with('domains')->get()
        ]);
    }
}
