<?php

namespace App\View\Components\home;

use Illuminate\View\Component;

class callToAction extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public array $skills = [];

    public function __construct()
    {
        $this->skills = [
            ['img_src' => 'img/skills/c-sharp.png', 'label'=> 'C#', 'class' => 'rounded-full', 'width' => "50" , 'height'=> "50"],
            ['img_src' => 'img/skills/css.png', 'label'=>'CSS', 'class' => 'rounded-full ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/html.png', 'label'=>'HTML', 'class' => 'rounded-full ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/java.png', 'label'=>'Java', 'class' => 'rounded-full ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/jquery.png', 'label'=>'Jquery', 'class' => 'rounded-full bg-white ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/js.png', 'label'=>'Javascript', 'class' => 'rounded-full  ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/laravel.png', 'label'=>'Laravel', 'class' => 'rounded-full ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/mysql.png', 'label'=>'MySQL', 'class' => 'rounded-full ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/php.png', 'label'=>'PHP', 'class' => 'rounded-full ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/python.png', 'label'=>'Python', 'class' => 'rounded-full ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/react.png', 'label'=>'React', 'class' => 'rounded-full ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/vb.png', 'label'=>'VB', 'class' => 'rounded-full ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/yii2.png', 'label'=>'Yii2', 'class' => 'rounded-full bg-white ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/adobe_photoshop.png', 'label'=>'Adobe Photoshop', 'class' => 'rounded-full e ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/adobe_xd.png', 'label'=>'Adobe XD', 'class' => 'rounded-full  ', 'width' => "50", 'height' => "50"],
            ['img_src' => 'img/skills/adobe_premier_pro.png', 'label'=>'Adobe Premier Pro', 'class' => 'rounded-full  ', 'width' => "50", 'height' => "50"],
        ];
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.call-to-action', ['skill_list' => $this->skills]);
    }
}
