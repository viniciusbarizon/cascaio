<?php

namespace App\View\Components\Expense\Form\Input;

use Illuminate\View\Component;

class Text extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $label, public string $name)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.expense.form.input.text');
    }
}
