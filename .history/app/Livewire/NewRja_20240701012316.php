<?php

namespace App\Livewire;

use Livewire\Component;

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
        'labour_items.*.cost' => 'required|numeric',
    ];

    public function mount()
    {
        $this->labour_items = [['cost' => 0]];
        $this->parts_items = [['number' => '', 'cost' => 0]];
    }

    public function addLabourItem()
    {
        $this->labour_items[] = ['cost' => 0];
    }

    public function removeLabourItem($index)
    {
        unset($this->labour_items[$index]);
        $this->labour_items = array_values($this->labour_items);
    }

    public function addPartsItem()
    {
        $this->parts_items[] = ['number' => '', 'cost' => 0];
    }

    public function removePartsItem($index)
    {
        unset($this->parts_items[$index]);
        $this->parts_items = array_values($this->parts_items);
    }

    public function submit()
    {
        $this->validate();

        Rja::create([
            'company_profile' => $this->company_profile,
            'maintenance_email' => $this->maintenance_email,
            'b2b_reference' => $this->b2b_reference,
            'diagnosis' => $this->diagnosis,
            'labour_items' => json_encode($this->labour_items),
            'parts_items' => json_encode($this->parts_items),
        ]);

        $this->reset();
        session()->flash('message', 'RJA submitted successfully.');
    }

    public function render()
    {
        return view('livewire.new-rja');
    }
}
