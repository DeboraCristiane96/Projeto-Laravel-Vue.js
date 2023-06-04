<?php

namespace Database\Factories;

use App\Models\Cardapio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PratosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'valor' => $this->faker->numerify('##.##'),
            'cardapio_id' => Cardapio::factory()
        ];
    }
}
