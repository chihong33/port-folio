<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;

class ProjectItem extends Component
{
    public array $image_arr;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $title, public array $categories, public string $imageDir, public string $github)
    {   
        $this->image_arr = Storage::allFiles($imageDir);
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
