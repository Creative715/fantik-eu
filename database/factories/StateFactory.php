<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'likes' => $this->faker->NumberBetween($min = 1, $max = 400),
            'views' => $this->faker->NumberBetween($min = 1, $max = 2500),
            'tour_id' => $this->faker->NumberBetween($min = 1, $max = 250),
        ];
    }
}
