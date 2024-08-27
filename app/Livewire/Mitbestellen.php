<?php

namespace App\Livewire;

use App\Models\Dish;
use App\Models\Supplier;
use Livewire\Component;

class Mitbestellen extends Component
{
    public $lieferanten;
    public $gerichte;
    public $selectedLieferant = 0;

    public function mount()
    {
        $this->lieferanten = Supplier::all();
        $this->lieferanten = Collect([]);

        if(request()->has('lieferant')) {
            $this->selectedLieferant = request('lieferant');
        }
    }

    public function render()
    {

        if ($this->selectedLieferant) {
            $this->gerichte = Dish::where('supplier_id', $this->selectedLieferant)->get();
        } else {
            $this->gerichte = Collect([]);
        }

        return view('livewire.mitbestellen');
    }
}
