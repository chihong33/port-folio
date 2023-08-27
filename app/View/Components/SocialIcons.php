<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SocialIcons extends Component
{
    
    public string $phone_no = '60164207769';
    public string $email = 'mokchi2324@hotmail.com';
    public string $linked_in = 'https://www.linkedin.com/in/chi-hong98/';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->phone_no = '60164207769';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.social-icons');
    }
}
