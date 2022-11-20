<?php

namespace App\Http\Livewire\Expense;

use App\Models\Category;
use App\Models\Country;
use Livewire\Component;

class Creation extends Component
{
    public array $categories;

    public string $category;

    public array $countries;

    public int $country_id;

    public string $description;

    public string $made_at;

    public float $price;

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
        return view('livewire.expense.creation');
    }
}
