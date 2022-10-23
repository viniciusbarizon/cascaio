<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Favicon extends Component
{
    public string $href, $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->href = 'resources/images/favicon.png';
        $this->type = 'image/png';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.favicon');
    }
}
