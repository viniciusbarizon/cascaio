<?php

namespace App\View\Components\Homepage;

use Illuminate\View\Component;

class Button extends Component
{
    public string $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $route, public string $text)
    {
        $this->name = $route;
        $this->route = $route;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.homepage.button');
    }
}
