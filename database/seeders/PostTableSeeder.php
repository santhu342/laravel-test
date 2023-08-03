<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Post One',
                'excerpt' => 'Summary of post one',
                'body' => 'body one',
                'img_path' => 'empty',
                'is_published' => false,
                'min_to_read' => 5,
                'ip_address' => '123'
            ],
            [
                'title' => 'Post Two',
                'excerpt' => 'Summary of post Two',
                'body' => 'body Two',
                'img_path' => 'empty',
                'is_published' => false,
                'min_to_read' => 5,
                'ip_address' => '123'
            ]
        ];

        foreach($posts as $key => $value){
            Post::create($value);
        }
    }
}
