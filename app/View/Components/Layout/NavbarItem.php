<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class NavbarItem extends Component
{
    public $href_link = "";
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href)
    {
        $this->href_link = $href;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar-item', ['href' => $this->href_link]);
    }
}
