<?php

namespace App\Http\Livewire;

use App\Models\Domain;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DuplicateDomains extends Component
{
    public function render()
    {
        return view('livewire.duplicate-domains', [
            'duplicates' => Domain::whereIn('domain', function ($query) {
                $query->select('domain')->from('domains')->groupBy('domain')->havingRaw('count(*) > 1');
            })->with('server')->orderBy('name', 'ASC')->get()
        ]);
    }
}
