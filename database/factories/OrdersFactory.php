<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customerID' => $this->faker->numberBetween(1,500),
            'serviceID' => $this->faker->numberBetween(0,5),
            'automobileID' => $this->faker->numberBetween(2,1000),
            'totalAmount' => $this->faker->numberBetween(1000,5000),
            'status' => $this->faker->numberBetween(0,1)
        ];
    }
}
