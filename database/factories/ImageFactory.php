<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
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
            'url' => 'posts/'. $this->faker->image('public/storage/posts', 500, 650, null, false),
        ];
    }
}
