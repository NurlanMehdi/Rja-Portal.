<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Rja;

class NewRja extends Component
{
    public $company_profile;
    public $maintenance_email;
    public $b2b_reference;
    public $diagnosis;
    public $labour_items = [];
    public $parts_items = [];

    protected $rules = [
        'company_profile' => 'required',
        'maintenance_email' => 'required|email',
        'b2b_reference' => 'required',
        'diagnosis' => 'required',
    ];


    public function submit()
    {
        $this->validate();

        Rja::create([
            'company_profile' => $this->company_profile,
            'maintenance_email' => $this->maintenance_email,
            'b2b_reference' => $this->b2b_reference,
            'diagnosis' => $this->diagnosis,
        ]);

        foreach ($this->labour_items as $item) {
            Item::create([
                'rja_id' => $rja->id,
                'type' => 'labour',
                'description' => $item['description'] ?? null,
                'cost' => $item['cost'] ?? 0,
            ]);
        }

        foreach ($this->parts_items as $item) {
            Item::create([
                'rja_id' => $rja->id,
                'type' => 'part',
                'part_number' => $item['part_number'] ?? null,
                'cost' => $item['cost'] ?? 0,
            ]);
        }

        $this->reset();
        session()->flash('message', 'RJA submitted successfully.');
    }

    public function render()
    {
        return view('livewire.new-rja');
    }
}
