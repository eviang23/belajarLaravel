<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonLink extends Component
{
    public $url;
    public $btnColor;
    public $textColor;
    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url = "#" , $btnColor = 'primary' , $textColor = 'white' , $text = 'Button Link')
    {
        $this->url = $url;
        $this->btnColor = $btnColor;
        $this->textColor = $textColor;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-link');
    }
}
