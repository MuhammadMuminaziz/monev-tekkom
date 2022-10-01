<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DistrictFactory extends Factory
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
            'name' => $this->faker->city(),
            'slug' => $this->faker->slug()
        ];
    }
}
