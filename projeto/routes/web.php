<?php

use App\Http\Controllers\CardapioController;
use App\Http\Controllers\TesteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', [TesteController::class, 'testar']);
Route::get('/cardapio', [CardapioController::class, 'index']);

