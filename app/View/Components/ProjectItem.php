<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $title, public array $categories, public string $image, public string $github)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project-item');
    }
}
