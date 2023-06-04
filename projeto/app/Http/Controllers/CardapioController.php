<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use Illuminate\Http\Request;

class CardapioController extends Controller
{
    public function index(){

        $cardapio = new Cardapio();

        return view('cardapio', ['cardapio' => $this->getTodos($cardapio)]);
    }

    public function getTodos($cardapio){
        $todos = [
            'Pizzas'    =>  $cardapio->getPizzas(),
            'Almoço'    =>  $cardapio->getAlmoco(),
            'Café da Manhã' => $cardapio->getCafeDaManha()
        ];    

        return $todos;

    }

}
