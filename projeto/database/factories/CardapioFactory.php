<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CardapioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->randomElement($array = ['Pizzas','Almoco','Café da Manhã'])
        ];
    }
}
