<?php
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

use App\Http\Controllers\ProducaoController;

Route::get('/producao/opcao1', [ProducaoController::class, 'opcao1'])->name('producao.opcao1');
Route::get('/producao/opcao2', [ProducaoController::class, 'opcao2'])->name('producao.opcao2');
Route::get('/producao/opcao3', [ProducaoController::class, 'opcao3'])->name('producao.opcao3');
