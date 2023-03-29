<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $text;
    public $color;
    public $size;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void 
     */
    public function __construct($text = "Button", $color = "primary" , $size = "" , $type="button")
    {
     $this->text = $text;  
     $this->color = $color;
     $this->size = $size;
     $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
