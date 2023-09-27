<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Intro extends Component
{
    public string $name = "";
    public string $selfie_image = "";
    public string $introduction = "";
    public string $resume_link = "";
    public string $cv_link = "";
    public array $company_list = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->name = "Joseph";
        dd('test');
        $this->selfie_image = "img/selfie.png";
        $this->introduction = "I am a full-stack web and mobile app developer (Flutter) with 3 years of working experience. I specialize in designing and building user-friendly interfaces and experienced in writing clean, reusable, and maintainable code. I am passionate about staying up-to-date with the latest trends in mobile and web development. Currently, I am actively seeking job opportunities in this field. Feel free to reach out to me if you have a job opportunity that aligns with my skills and interests!";
        $this->resume_link = "/download_resume";
        $this->cv_link = "";
        $this->company_list = [
            ['image' => 'img/silkron.png' ,'link' => 'https://www.silkron.com/'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.intro');
    }
}
