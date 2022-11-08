<?php

namespace App\Http\Livewire\Expense;

use App\Models\Country;

use Livewire\Component;

class Create extends Component
{
    public array $countries;

    public function mount()
    {
        $this->countries = Country::pluck('name', 'id')->all();
    }

    public function render()
    {
        return view('livewire.expense.create');
    }
}
