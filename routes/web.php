<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/produto', [ProdutosController::class, 'store'])->name('produto.store');
