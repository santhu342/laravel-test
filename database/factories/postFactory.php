<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
                'title' => $this->faker->unique()->sentence(),
                'excerpt' => $this->faker->realText(10),
                'body' => $this->faker->text(),
                'img_path' => $this->faker->imageUrl(640,480),
                'is_published' => 1,
                'min_to_read' => $this->faker->numberBetween(1,10),
                'ip_address' => $this->faker->realText(15)
        ];
    }
}
