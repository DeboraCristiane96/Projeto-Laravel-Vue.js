<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    use HasFactory;

    protected $pizzas = [
        'Calabresa' => [
            'id'    =>  0,
            'preco' =>  25.50
        ],
        'Quatro Queijos'=> [
            'id'    =>  1,
            'preco' =>  25.50
        ],
        'Portuguesa'=>  [
            'id'    =>  2,
            'preco' =>  25.50
        ],
        'Americana' =>  [
            'id'    =>  3,
            'preco' =>  25.50
        ]
    ];

    protected $almoco = [
        'Feijão com Arroz e Frango' =>  [
            'id'    =>  4,
            'preco' =>  10
        ],
        'Arroz de Leite com Charque'=>  [
            'id'    =>  5,
            'preco' =>  12
        ],
        'Arroz com Lazanha'=>  [
            'id'    =>  6,
            'preco' =>  15
        ],
        'Cuscuz com ovo'=>  [
            'id'    =>  7,
            'preco' =>  10
        ]
    ];

    protected $cafe_da_manha = [
        'Café com torradas' => [
            'id' => 8,
            'preco' => 3
        ],
        'Pão com ovo' => [
            'id' => 9,
            'preco' => 1.50
        ],
        'Tapioca de manteiga' => [
            'id' => 10,
            'preco' => 2.0
        ]
    ];

    public function getPizzas(){
        return $this->pizzas;
    }
    public function getAlmoco(){
        return $this->almoco;
    }
    public function getCafeDaManha(){
        return $this->cafe_da_manha;
    }

}
