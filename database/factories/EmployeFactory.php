<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'card' => $this->faker->word,
            'class' => $this->faker->name(5),
            'description' => $this->faker->sentence(25),
            'target' => $this->faker->word
        ];
    }
}
