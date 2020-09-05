<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class Select extends Component
{
    public $options;
    public $name;
    public $id;
    public $class;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($options=[], $name="", $id="", $class="", $value="")
    {
        $this->options = $options;
        $this->name    = $name;
        $this->id      = $id;
        $this->class   = $class;
        $this->value   = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.select');
    }
}
