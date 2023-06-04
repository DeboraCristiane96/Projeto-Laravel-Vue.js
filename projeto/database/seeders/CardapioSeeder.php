<?php

namespace Database\Seeders;

use App\Models\Cardapio;
use Illuminate\Database\Seeder;

class CardapioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->criarCardapios();
    }

    public function criarCardapios(){
        Cardapio::create(['nome' => 'Pizzas']);
        Cardapio::create(['nome' => 'Almoço']);
        Cardapio::create(['nome' => 'Café da Manhã']);
    }
}
