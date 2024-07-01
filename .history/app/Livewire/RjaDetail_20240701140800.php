<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Rja;

class RjaDetail extends Component
{
    public $rja;

    public function mount($id)
    {
        $this->rja = Rja::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.rja-detail');
    }
}
