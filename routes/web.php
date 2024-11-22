<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::post('cadastro', [ProdutosController::class, 'store'])->name('cadastro');
