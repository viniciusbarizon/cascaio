<?php

namespace App\Http\Livewire\Expense;

use App\Models\Category;
use App\Models\Country;
use Livewire\Component;

class Creation extends Component
{
    public array $categories;

    public ?string $category = null;

    public array $countries;

    public ?int $country_id = null;

    public ?string $description = null;

    public ?string $made_at = null;

    public ?float $price = null;

    protected $rules = [
        'category' => 'required|string|max:50',
        'country_id' => 'required|integer|min:1',
        'description' => 'sometimes|string|max:255',
        'made_at' => 'required|date|date_format:Y-m-d',
        'price' => 'required|numeric|min:0.01',
    ];

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

    public function create()
    {
        $this->validate();
    }
}
