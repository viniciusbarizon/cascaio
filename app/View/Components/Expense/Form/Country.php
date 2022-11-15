<?php

namespace App\View\Components\Expense\Form;

use App\Models\Country as CountryModel;

use Illuminate\View\Component;

class Country extends Component
{
    public array $countries;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setCountries();
    }

    private function setCountries(): void
    {
        $this->countries = CountryModel::orderBy('name')
            ->pluck('name')
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
