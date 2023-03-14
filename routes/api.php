<?php

use App\Http\Controllers\API\LojaController;
use App\Http\Controllers\API\ProdutoController;
use App\Http\Controllers\API\RegisterController;
use Illuminate\Support\Facades\Route;

// Arquivo destinado as rotas API da aplicação
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

// Grupo de rotas autenticado via token do Passport com scopes
Route::group(['middleware' => ['auth:api', 'scopes:access']], function () {
    Route::apiResource('loja', LojaController::class);
    Route::apiResource('produto', ProdutoController::class);
});

// Rota default para validação de erros
Route::get('default', [RegisterController::class, 'defaultValidation'])->name('default');
