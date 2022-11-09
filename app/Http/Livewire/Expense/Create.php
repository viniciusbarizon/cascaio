<?php

namespace App\Http\Livewire\Expense;

use App\Models\{
    CategoryDefaultCountry,
    Country
};

use Livewire\Component;

class Create extends Component
{
    public array $categories, $countries;

    public function mount()
    {
        $this->countries = Country::orderBy('name')->pluck('name', 'id')->all();
    }

    public function render()
    {
        return view('livewire.expense.create');
    }
}
