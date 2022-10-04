<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city_id' => rand(1, 10),
            'district_id' => rand(1, 20),
            'name' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'isActive' => 0
        ];
    }
}
