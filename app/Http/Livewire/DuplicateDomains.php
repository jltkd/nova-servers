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
            'duplicates' => DB::table('domains')
               ->select('name', DB::raw('COUNT(*) as `count`'))
                ->groupBy('name')
                ->havingRaw('COUNT(*) > 1')
                ->get()
        ]);
    }
}
