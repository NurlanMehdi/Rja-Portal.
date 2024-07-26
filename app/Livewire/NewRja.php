<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Rja;
use App\Models\RjaMail;
use App\Models\Company;
use App\Models\Items;

class NewRja extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];
    public $company_id;
    public $email;
    public $b2b_reference;
    public $diagnosis;
    public $labour_items = [];
    public $parts_items = [];
    public $cc_emails = [];

    protected $rules = [
        'b2b_reference' => 'required',
        'diagnosis' => 'required',
        'labour_items.*.cost' => 'numeric',
        'parts_items.*.number' => 'string',
        'parts_items.*.cost' => 'numeric',
    ];

    public function mount()
    {
        $this->labour_items = [['cost' => '']];
        $this->parts_items = [['number' => '', 'cost' => '']];
    }

    public function addLabourItem()
    {
        $this->labour_items[] = ['cost' => ''];
    }

    public function addCCEmails()
    {
        $this->cc_emails[] = [
            'email' => ''
        ];
    }

    public function removeCCEmail($key)
    {
        unset($this->cc_emails[$key]);
    }

    public function addPartsItem()
    {
        $this->parts_items[] = ['number' => '', 'cost' => ''];
    }

    public function removeLabourItem($index)
    {
        unset($this->labour_items[$index]);
        $this->labour_items = array_values($this->labour_items);  // Reindex the array
    }

    public function removePartsItem($index)
    {
        unset($this->parts_items[$index]);
        $this->parts_items = array_values($this->parts_items);  // Reindex the array
    }

    private function cleanNumericFields()
    {
        $this->labour_items = array_map(function ($item) {
            $item['cost'] = str_replace(',', '', $item['cost']);
            return $item;
        }, $this->labour_items);

        $this->parts_items = array_map(function ($item) {
            $item['cost'] = str_replace(',', '', $item['cost']);
            return $item;
        }, $this->parts_items);
    }

    public function submit()
    {
        $this->cleanNumericFields();

        $this->validate();


        $rja = Rja::create([
            'company_id' => $this->company_id,
            'b2b_reference' => $this->b2b_reference,
            'diagnosis' => $this->diagnosis,
        ]);

        if ($rja) {
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

            if ($this->email != '') {
                RjaMail::create([
                    'rja_id' => $rja->id,
                    'mail' => $this->email
                ]);
            }

            foreach ($this->cc_emails as $item) {

                RjaMail::create([
                    'rja_id' => $rja->id,
                    'mail' => $item['email']
                ]);
            }

            Rja::sendRjaEmail($rja->id);
            $this->reset();
            $this->dispatch(
                'success_modal'
            );
            session()->flash('message', 'RJA submitted successfully.');
        } else {
            session()->flash('error', 'An error occurred while submitting the RJA.');
        }



        // session()->flash('message', 'RJA submitted successfully.');
    }
    protected function refreshComponent()
    {
    }
    public function render()
    {
        $companies = Company::with('emails')->get();
        return view('livewire.new-rja', ['companies' => $companies]);
    }
}
