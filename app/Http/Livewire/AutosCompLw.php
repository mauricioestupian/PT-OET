<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Auto;


class AutosCompLw extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.autos-comp-lw', [
            'autos' => Auto::orderBy('placa', 'desc')->paginate(2)
        ]);
    }

    public function destroy($id)
    {
        $Auto = Auto::find($id);
        $Auto->delete();
    }
}
