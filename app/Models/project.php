<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class project extends Model
{

    use HasFactory;

    public static function getListOfProjects() : array {
        return [
            [
                'category' => ['Yii2', 'Jquery', 'PHP', 'JavaScript', 'Bootstrap'],
                'title' => 'Vendron Cloud',
                'image_dir' => 'public/vendron_cloud',
                'project_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'github_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'description' => "Vendron Cloud is a cloud-based smart vending platform designed for operators to manage their vending machines through a web portal. Its core features include checking machine status, generating sales reports, restocking, user management and inventory management.",
                'responsibilities' => ['Develop new feature and maintain existing functionality', 'Develop various APIs for machine and mobile app usage.']
            ],
            [
                'category' => ['Flutter', 'Dart', 'PHP', 'Github', 'SVN'],
                'title' => 'Vendron Go',
                'image_dir' => 'public/vendron_go',
                'project_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'github_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'description' => "Vendron GO is a mobile application that allows users to remotely view products inside vending machines, make purchases, and reserve products in vending machines. It also supports multiple payment methods to satisfy various end users from different country.",
                'responsibilities' => ['Publish and manage app on Goolge and Apple app store', 'CI/CD on app and cloud APIs', 'Code base version control']
            ],
            [
                'category' => ['Flutter', 'Dart', 'PHP', 'Github', 'SVN'],
                'title' => 'Vendron OP',
                'image_dir' => 'public/vendron_op',
                'project_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'github_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'description' => "Vendron OP is a mobile application designed for operators to efficiently manage their machines remotely anywhere, anytime. Its core features include viewing sales reports, monitoring machine status, remote machine management, and restocking capabilities.",
                'responsibilities' => ['Publish and manage app on Goolge and Apple app store', 'CI/CD on app and cloud APIs', 'Code base version control']
            ],
            [
                'category' => ['YOLOv5', 'Python', 'Machine-Learning', 'GCP'],
                'title' => 'Smart Fridge',
                'image_dir' => 'public/yolov5',
                'project_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'github_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'description' => "I used YOLOv5 framework to train a model for identifying products inside a smart fridge. The model I trained achieved very high accuracy, consistently above 95%, even when products were placed in different lighting, positions, and angles. Model training were conducted on the Google Cloud Platform (GCP). After successfully training the model, I visualized its accuracy using WandB and evaluated its performance.",
                'responsibilities' => ['Image labeling', 'Model training', 'Model evaluation', 'Deployment', 'GCP instance set up']
            ],
            [
                'category' => ['WeChat H3', 'Javascript'],
                'title' => '冰兽传淇',
                'image_dir' => 'public/bingshou',
                'project_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'github_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'description' => "冰兽传淇 is a Mini Program developed within the WeChat H5 framework. The purpose of this app is to enable users in China to remotely purchase ice cream from vending machines and make payments via WeChat Pay. It is very similar to Vendron GO, with the key difference being its integration within the WeChat ecosystem.",
                'responsibilities' => ['Develop UI', 'Deploy and manage WeChat mini program']
            ]
        ];
    }

    /**
     * @param String $project_name must strtolower first!
     * @return Array an array of project data
     */
    public static function getProjectData($project_name){
        $project_data =  collect(self::getListOfProjects())->first(function ($item) use ($project_name) {
            return strtolower($item['title']) == $project_name;
        });
        $image_list = [];
        foreach (Storage::allFiles($project_data['image_dir']) as $image) {
            $image_list[] = Storage::url($image);
        };
        
        //convert file name to number to sort it naturally
        $project_data['image_list'] = collect($image_list)->sortBy(function ($filename) {
                                            return (int)pathinfo($filename, PATHINFO_FILENAME);
                                        })->values()->all();
        return $project_data;
    }
}
