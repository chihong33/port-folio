<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{

    use HasFactory;

    public static function getListOfProjects() : array {
        return [
            [
                'category' => ['Laravel', 'Tailwind.css'],
                'title' => 'Port Folio web app',
                'image_dir' => 'public/vendron_go',
                'github' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s'
            ],
            [
                'category' => ['Yii2', 'Jquery'],
                'title' => 'Vendron Cloud',
                'image_dir' => 'public/vendron_go',
                'github' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s'
            ],
            [
                'category' => ['Flutter', 'Dart'],
                'title' => 'Vendron Go',
                'image_dir' => 'public/vendron_go',
                'github' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s'
            ],
            [
                'category' => ['Flutter', 'Dart'],
                'title' => 'Vendron OP',
                'image_dir' => 'public/vendron_go',
                'github' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s'
            ],
            [
                'category' => ['WeChat H3', 'Javascript'],
                'title' => 'Wehchat mini app',
                'image_dir' => 'public/vendron_go',
                'github' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s'
            ]
        ];
    }

    /**
     * @param String $project_name must strtolower first!
     * @return Array an array of project data
     */
    public static function getProjectData($project_name){
        return collect(self::getListOfProjects())->first(function ($item) use ($project_name) {
            return strtolower($item['title']) == $project_name;
        });
    }
}
