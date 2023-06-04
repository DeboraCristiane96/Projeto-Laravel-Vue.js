<?php

namespace Database\Seeders;

use App\Models\Pratos;
use Illuminate\Database\Seeder;

class PratosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->criarPizzas();
        $this->criarAlmocos();
        $this->criarCafes();
    }

    public function criarPizzas(){
        Pratos::create([
            'nome'  =>  'Calabresa',
            'valor' =>  25.50,
            'cardapio_id'   =>  1
        ]);

        Pratos::create([
            'nome'  =>  'Quatro Queijos',
            'valor' =>  25.50,
            'cardapio_id'   => 1
        ]);

        Pratos::create([
            'nome'  =>  'Portuguesa',
            'valor' =>  25.50,
            'cardapio_id'   => 1
        ]);

        Pratos::create([
            'nome'  =>  'Americana',
            'valor' =>  25.50,
            'cardapio_id'   => 1
        ]);

    }

    public function criarAlmocos(){
        Pratos::create([
            'nome'  =>  'Feijão com Arroz e Frango',
            'valor' =>  10,
            'cardapio_id'   =>  2
        ]);
        Pratos::create([
            'nome'  =>  'Arroz de leite com Charque',
            'valor' =>  12,
            'cardapio_id'   =>  2
        ]);
        Pratos::create([
            'nome'  =>  'Arroz com Lazanha',
            'valor' =>  15,
            'cardapio_id'   =>  2
        ]);
        Pratos::create([
            'nome'  =>  'Cuscuz com ovo',
            'valor' =>  10,
            'cardapio_id'   =>  2
        ]);        
    }

    public function criarCafes(){
        Pratos::create([
            'nome'  =>  'Café com Torradas',
            'valor' =>  3,
            'cardapio_id'   =>  3
        ]);
        Pratos::create([
            'nome'  =>  'Pão com ovo',
            'valor' =>  1.50,
            'cardapio_id'   =>  3
        ]);
        Pratos::create([
            'nome'  =>  'Tapioca de manteiga',
            'valor' =>  2.0,
            'cardapio_id'   =>  3
        ]);
    }

}
