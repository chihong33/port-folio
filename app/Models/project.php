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
                'description' => "Vendron Cloud is a cloud based smart vending platform for operator to manage their machine on web portal. Its core feature is for operator to check machine status, generate sales report, restock, user management and inventory management.",
                'responsibilities' => ['Develop new feature and maintain existing functionality', 'Develop various APIs for machine and mobile app usage.']
            ],
            [
                'category' => ['Flutter', 'Dart', 'PHP', 'Github', 'SVN'],
                'title' => 'Vendron Go',
                'image_dir' => 'public/vendron_go',
                'project_link' => '',
                'github_link' => '',
                'description' => "Vendron GO is an mobile appication for user to make purchase and book an product in vending machine remotely. It also support multiple payment method to satisfy various end users.",
                'responsibilities' => ['Publish and manage app on Goolge and Apple app store', 'CI/CD on app and cloud APIs', 'Code base version control']
            ],
            [
                'category' => ['Flutter', 'Dart', 'PHP', 'Github', 'SVN'],
                'title' => 'Vendron OP',
                'image_dir' => 'public/vendron_op',
                'project_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'github_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'description' => "Vendron OP is an mobile application for operator to manage their vending machine remotely. Its core feature include viweing sales report, machine status monitoring, manage machine remotely and restock. ",
                'responsibilities' => ['Publish and manage app on Goolge and Apple app store', 'CI/CD on app and cloud APIs', 'Code base version control']
            ],
            [
                'category' => ['YOLOv5', 'Python', 'Machine-Learning', 'GCP'],
                'title' => 'Smart Fridge',
                'image_dir' => 'public/yolov5',
                'project_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'github_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'description' => "Utilize YOLOv5 to train an model to identify product inside smart fridge. The model that i trained has very high accuracy (anove 95%) even the product was placed in different lightining, position and angel. We train our model on Google Cloud Platform (GCP) so one of our of the challenging point is to set up an instance for our model tranining usage. Later after the model was trained, we visualize the accuracy on WandB and evaluate the model performance. ",
                'responsibilities' => ['Image labeling', 'Model training', 'Model evaluation', 'Deployment', 'GCP instance set up']
            ],
            [
                'category' => ['WeChat H3', 'Javascript'],
                'title' => '冰兽传淇',
                'image_dir' => 'public/bingshou',
                'project_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'github_link' => 'https://www.youtube.com/watch?v=JNhmEoBsZ48&t=5286s',
                'description' => "冰兽传淇 is a Mini Program developed within the WeChat H5 framework. The prupose of this app is to allow users in china to purchase ice cream from vending machine remotely and make payment via wechat pay. It's very similar with Vendron GO except its in the wechat eco system.",
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
            $project_data['image_list'][] = Storage::url($image);
        };
        return $project_data;
    }
}
