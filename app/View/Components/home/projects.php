<?php

namespace App\View\Components\home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class projects extends Component
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
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind.css'],
                'title' => 'Port Folio web app',
                'image' => url('/img/test.jpg'),
                'github' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s'
            ],
            [
                'category' => ['Yii2', 'Jquery'],
                'title' => 'Vendron Cloud',
                'image' => url('/img/test.jpg'),
                'github' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s'
            ],
            [
                'category' => ['Flutter', 'Dart'],
                'title' => 'Vendron Go',
                'image' => url('/img/test.jpg'),
                'github' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s'
            ],
            [
                'category' => ['Flutter', 'Dart'],
                'title' => 'Vendron OP',
                'image' => url('/img/test.jpg'),
                'github' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s'
            ],
            [
                'category' => ['WeChat H3', 'Javascript'],
                'title' => 'Wehchat mini app',
                'image' => url('/img/test.jpg'),
                'github' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s'
            ]
        ];

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
