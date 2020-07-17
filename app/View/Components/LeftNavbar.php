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
        $this->navigations = [
            ['name' => 'Dashboard', 'icon' => 'icons/dashboard_icon.svg' ],
            ['name' => 'Manage',    'icon' => 'icons/rocket_icon.svg'    ],
            ['name' => 'Subject',   'icon' => 'icons/book_icon.svg'      ],
            ['name' => 'Classroom', 'icon' => 'icons/structure_icon.svg' ],
            ['name' => 'Teacher',   'icon' => 'icons/connection_icon.svg'],
            ['name' => 'Schedule',  'icon' => 'icons/calendar_icon.svg'  ],
            ['name' => 'Student',   'icon' => 'icons/smile_icon.svg'     ],
            ['name' => 'Tuition',   'icon' => 'icons/bubble_icon.svg'    ],
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
