<?php

namespace App\Http\Livewire\Expense;

use App\Models\{
    Category,
    Country
};

use Livewire\Component;

class Create extends Component
{
    public array $categories, $countries;

    public function mount()
    {
        $this->setCategories();
        $this->setCountries();
    }

    private function setCategories(): void
    {
        $this->categories = Category::where('user_id', auth()->user()->id)
            ->orderBy('name')
            ->pluck('name')
            ->all();
    }

    private function setCountries(): void
    {
        $this->countries = Country::orderBy('name')
            ->pluck('name', 'id')
            ->all();
    }

    public function render()
    {
        return view('livewire.expense.create');
    }
}
