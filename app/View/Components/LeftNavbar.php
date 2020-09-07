<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Config;
use App;

class LeftNavbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        App::setLocale('en');
        //config::setlocale('ind');
        $this->navigations = [
            ['name' => trans('left_bar.dashboard'), 'icon' => 'icons/dashboard_icon.svg',   'url'=> 'dashboard'     ],
            ['name' => trans('left_bar.manage'),    'icon' => 'icons/rocket_icon.svg',      'url'=> 'dashboard'     ],
            ['name' => trans('left_bar.subject'),   'icon' => 'icons/book_icon.svg',        'url'=> 'dashboard'     ],
            ['name' => trans('left_bar.classroom'), 'icon' => 'icons/structure_icon.svg',   'url'=> 'modals'     ],
            ['name' => trans('left_bar.teacher'),   'icon' => 'icons/connection_icon.svg',  'url'=> 'dashboard'     ],
            ['name' => trans('left_bar.schedule'),  'icon' => 'icons/calendar_icon.svg',    'url'=> 'dashboard'     ],
            ['name' => trans('left_bar.student'),   'icon' => 'icons/smile_icon.svg',       'url'=> 'dashboard'     ],
            ['name' => trans('left_bar.tuition'),   'icon' => 'icons/bubble_icon.svg',      'url'=> 'dashboard'     ],
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
