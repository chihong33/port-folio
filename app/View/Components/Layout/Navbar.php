<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{   
    public array $navigationItems = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => "Intro", 'href' => "#intro"],
            ['label' => "Roadmap", 'href' => "#roadmap"],
            ['label' => "Project", 'href' => "#project"],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar', ['nagivationItems' => $this->navigationItems]);
    }
}
