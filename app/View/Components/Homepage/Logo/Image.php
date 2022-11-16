<?php

namespace App\View\Components\Homepage\Logo;

use Illuminate\View\Component;

class Image extends Component
{
    public string $dusk;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $alt, public string $src)
    {
        $this->alt = $alt;
        $this->dusk = strtolower($alt);
        $this->src = 'resources/images/logo/'.$src;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.homepage.logo.image');
    }
}
