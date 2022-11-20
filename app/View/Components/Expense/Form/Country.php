<?php

namespace App\View\Components\Expense\Form;

use App\Models\Country as CountryModel;
use Illuminate\View\Component;

class Country extends Component
{
    public array $countries;
    public string $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setCountries();

        $this->name = 'country-id';
    }

    private function setCountries(): void
    {
        $this->countries = CountryModel::orderBy('name')
            ->pluck('name', 'id')
            ->all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.expense.form.country');
    }
}
