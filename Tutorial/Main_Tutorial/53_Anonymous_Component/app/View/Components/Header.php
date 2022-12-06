<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title = "";
    public function __construct($componentName)
    {
        // now here we will get the pass data from view
        // and we will assign that value to a property
        // now we can access that value on 'header.blade.php' component
        $this->title = $componentName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
