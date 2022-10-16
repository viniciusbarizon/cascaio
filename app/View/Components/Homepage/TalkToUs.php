<?php

namespace App\View\Components\Homepage;

use Illuminate\View\Component;

class TalkToUs extends Component
{
    public string $email;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $text)
    {
        $this->email = env('MAIL_FROM_ADDRESS');
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
