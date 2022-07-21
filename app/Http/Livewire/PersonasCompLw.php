<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Persona;

class PersonasCompLw extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.personas-comp-lw', ['personas' => Persona::orderBy('documento', 'desc')->paginate(10)]);
    }
}
