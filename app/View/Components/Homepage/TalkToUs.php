<?php

namespace App\View\Components\Homepage;

use Illuminate\View\Component;

class TalkToUs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $email, public string $text)
    {
        $this->email = $email;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.homepage.talk-to-us');
    }
}
