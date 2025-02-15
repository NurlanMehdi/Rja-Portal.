<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Rja;
use App\Models\RjaMail;
use App\Models\Company;
use App\Models\CompanyMail;
use App\Models\Items;

class NewRja extends Component
{
    public $company_id;
    public $email;
    public $b2b_reference;
    public $total_labour_cost;
    public $total_parts_cost;
    public $total;
    public $diagnosis;
    public $company_emails = [];
    public $labour_items = [];
    public $parts_items = [];
    public $ec_emails = [];
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
        $this->email = '';
        $this->company_emails = [];
        $this->cc_emails = [];
        $this->ec_emails = [];
        $this->total_labour_cost = 0.00;
        $this->total_parts_cost = 0.00;
        $this->total = 0.00;
        $this->labour_items = [['cost' => '']];
        $this->parts_items = [['number' => '', 'cost' => '']];
    }
    public function getCompanyEmails()
    {
        $this->company_emails = [];
        $company_emailss = CompanyMail::select('email')->where('company_id', $this->company_id)->get();
        $all_emails = [];
        foreach ($company_emailss as $key => $company_email) {
            if ($key > 0) {
                $all_emails[] = $company_email->email;
            }
        }
        $this->company_emails = $all_emails;
        $this->email = $company_emailss[0]->email;
    }
    public function addLabourItem()
    {
        $this->labour_items[] = ['cost' => ''];
        $this->totalCalculation();
    }

    public function addCCEmails()
    {
        $this->cc_emails[] = [
            'email' => ''
        ];
    }

    public function removeCompanyEmail($key)
    {
        unset($this->company_emails[$key]);
    }

    public function removeCCEmail($key)
    {
        unset($this->cc_emails[$key]);
    }

    public function addPartsItem()
    {
        $this->parts_items[] = ['number' => '', 'cost' => ''];
        $this->totalCalculation();
    }

    public function removeLabourItem($index)
    {

        unset($this->labour_items[$index]);
        $this->totalCalculation();
    }

    public function removePartsItem($index)
    {
        unset($this->parts_items[$index]);
        $this->totalCalculation();
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
    public function totalCalculation()
    {
        $this->total_labour_cost = 0;
        foreach ($this->labour_items as $labour_items) {
            $this->total_labour_cost += (float)str_replace(",", "", $labour_items['cost']);
        }
        $this->total_parts_cost = 0;
        foreach ($this->parts_items as $parts_items) {
            $this->total_parts_cost += (float)str_replace(",", "", $parts_items['cost']);
        }

        $this->total = $this->total_labour_cost + $this->total_parts_cost;
        $this->total_labour_cost = number_format($this->total_labour_cost, 2, '.', ',');
        $this->total_parts_cost = number_format($this->total_parts_cost, 2, '.', ',');
        $this->total = number_format($this->total, 2, '.', ',');
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
