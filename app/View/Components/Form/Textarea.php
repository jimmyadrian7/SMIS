<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $type;
    public $value;
    public $name;
    public $id;
    public $attributes;
    public $class;
    public $placeholder;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type="", $value="", $name="", $id="", $attributes="", $class="", $placeholder="")
    {
        $this->type         = $type;
        $this->value        = $value;
        $this->name         = $name;
        $this->id           = $id;
        $this->attributes   = $attributes;
        $this->class        = $class;
        $this->placeholder  = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.textarea');
    }
}
