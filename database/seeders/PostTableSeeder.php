<?php

namespace Database\Seeders;

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
            ],
            [
                'title' => 'Post Two',
                'excerpt' => 'Summary of post Two',
                'body' => 'body Two',
                'img_path' => 'empty',
                'is_published' => false,
                'min_to_read' => 5,
            ],
        ];
    }
}
