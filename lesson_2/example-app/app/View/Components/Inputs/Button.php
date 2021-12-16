<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class Button extends Component
{
    public string $text;
    public string $color;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $color)
    {
        $this->text = $text;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        /*return function($data){
            //dd($data);
            return 'Components.Inputs.Button';
        };
       return view('components.inputs.button');*/
        return <<<'blade'
    <button type="button" class="btn btn-primary fw-bold" style="color: {{$color}};">{{$slot}}</button>
 blade;
    }
}
