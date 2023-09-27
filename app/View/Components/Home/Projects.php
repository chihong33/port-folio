<?php

namespace App\View\Components\Home;

use App\Models\project;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Projects extends Component
{
    public array $items = [];
    public array $skill_tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //can add translation as feature
        $this->items = project::getListOfProjects();
        $this->skill_tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.projects');
    }
}
