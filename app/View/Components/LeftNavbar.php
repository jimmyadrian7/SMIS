<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Config;

class LeftNavbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $test =  trans('left_bar.dashboard');
        $this->navigations = [
            ['name' => trans('left_bar.dashboard'), 'icon' => 'icons/dashboard_icon.svg' ],
            ['name' => trans('left_bar.manage'),    'icon' => 'icons/rocket_icon.svg'    ],
            ['name' => trans('left_bar.subject'),   'icon' => 'icons/book_icon.svg'      ],
            ['name' => trans('left_bar.classroom'), 'icon' => 'icons/structure_icon.svg' ],
            ['name' => trans('left_bar.teacher'),   'icon' => 'icons/connection_icon.svg'],
            ['name' => trans('left_bar.schedule'),  'icon' => 'icons/calendar_icon.svg'  ],
            ['name' => trans('left_bar.student'),   'icon' => 'icons/smile_icon.svg'     ],
            ['name' => trans('left_bar.tuition'),   'icon' => 'icons/bubble_icon.svg'    ],
        ];
    }

    public function isSelected($current)
    {
        return Config::get('navActive') == $current ? "active" : '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        return view('components.left-navbar', ['navigations' => $this->navigations]);
    }
}
