<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Rja;
use App\Models\Company;
use App\Models\Items;

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
        'parts_items.*.number' => 'required|string',
        'parts_items.*.cost' => 'required|numeric',
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
        //dd($this->labour_items);
        $this->validate();

        $rja = Rja::create([
            'company_id' => $this->company_profile,
            'maintenance_email' => $this->maintenance_email,
            'b2b_reference' => $this->b2b_reference,
            'diagnosis' => $this->diagnosis,
        ]);

        foreach ($this->labour_items as $item) {
            Items::create([
                'rja_id' => $rja->id,
                'type' => 'labour',
                'cost' => $item['cost'] ?? 0,
            ]);
        }

        foreach ($this->parts_items as $item) {
            Items::create([
                'rja_id' => $rja->id,
                'type' => 'part',
                'part_number' => $item['number'] ?? null,
                'cost' => $item['cost'] ?? 0,
            ]);
        }

        $this->reset();
        session()->flash('message', 'RJA submitted successfully.');
    }

    public function render()
    {
        $companies = Company::all();
        return view('livewire.new-rja', ['companies' => $companies]);
    }
}

