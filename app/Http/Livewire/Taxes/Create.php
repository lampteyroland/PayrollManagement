<?php

namespace App\Http\Livewire\Taxes;

use App\Models\Tax;
use Livewire\Component;

class Create extends Component
{
        public $employee_id;
        public $tax_name;
        public $tax_date;
        public $tax_rate;
        public $tax_type;
        public $description;

    public function render()
    {
        return view('livewire.taxes.create');
    }

    public function createTax()
    {
        $validatedData = $this->validate([
            'tax_name' => 'required|string|max:255',
            'tax_rate' => 'required',
            'tax_type' => 'required',
            'description' => 'required',
            'tax_date=' => 'required',

            // Add more validation rules as needed
        ]);
        Tax::create($validatedData);

        // Clear the form fields after successful submission
        $this->tax_name = '';
        $this->tax_rate = '';
        $this->tax_date = '';
        $this->tax_type = '';
        $this->description = '';


        session()->flash('message', 'Information saved successfully.');


}}
