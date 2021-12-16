<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'details' => "details",
            'duration' => $this->faker->numberBetween(0,16255),
            'price' => $this->faker->numberBetween(1000,5000)
        ];
    }
}
