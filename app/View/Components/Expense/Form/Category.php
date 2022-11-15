<?php

namespace App\View\Components\Expense\Form;

use App\Models\Category as ModelsCategory;

use Illuminate\View\Component;

class Category extends Component
{
    public array $categories;
    public string $datalistId, $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->datalistId = 'categories';
        $this->name = 'category';

        $this->setCategories();
    }

    private function setCategories(): void
    {
        $this->categories = ModelsCategory::where('user_id', auth()->user()->id)
            ->orderBy('name')
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
        return view('components.expense.form.category');
    }
}
