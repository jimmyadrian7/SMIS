<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id="")
    {
        $this->id = $id;
        $this->roles = [
            ['id'=> 1, 'name' => 'Fransiska W.H', 'status' => 'A', 'color'=> 'text-success'],
            ['id'=> 2, 'name' => 'Marcus Xaverius', 'status' => 'P', 'color'=> 'text-danger'],
            ['id'=> 3, 'name' => 'Radian Hatta', 'status'=>'A', 'color'=> 'text-success'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        //dd($this->roles);
        //return view('components.modal');
        return view('components.modal', ['roles' => $this->roles]);
    }
}
