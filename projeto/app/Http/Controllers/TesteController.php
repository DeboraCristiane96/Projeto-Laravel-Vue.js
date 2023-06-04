<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    
    public function testar(Request $request){

        $nome = isset($request->nome) ? $request->nome : 'vazio';

        return view('teste', ['nome' => $nome]);
    }

}
