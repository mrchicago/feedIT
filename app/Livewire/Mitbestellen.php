<?php

namespace App\Livewire;

use App\Models\Lieferanten;
use Livewire\Component;

class Mitbestellen extends Component
{
    public $lieferanten;
    public $gerichte;
    public $selectedLieferant = 0;

    public function mount()
    {
        // $this->lieferanten = Lieferanten::all();
        $this->lieferanten = Collect([]);
    }

    public function render()
    {

        if ($this->selectedLieferant) {
            $this->gerichte = Gerichte::where('lieferant_id', $this->selectedLieferant)->get();
        } else {
            $this->gerichte = Collect([]);
        }

        return view('livewire.mitbestellen');
    }
}
