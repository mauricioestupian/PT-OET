<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Auto;

class AutosCompLw extends Component
{
    public function render()
    {
        return view('livewire.autos-comp-lw', [
            'autos' => auto::orderBy('placa', 'desc')->paginate(8)
        ]);
    }
}
