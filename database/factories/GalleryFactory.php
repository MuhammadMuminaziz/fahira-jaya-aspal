<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'job_id' => mt_rand(1, 2),
            'name' => $this->faker->sentence(),
            'note' => $this->faker->sentence()
        ];
    }
}
