<?php

use App\Http\Controllers\LojaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;

// Arquivo destinado as rotas API da aplicação
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

/* Grupo de rotas autenticado via token do Passport com scopes, que permite determinar
 qual acesso uma rota ou um grupo precisam para serem acessados */
Route::group(['middleware' => ['auth:api', 'check-token:access']], function () {
    Route::apiResource('loja', LojaController::class);
    Route::apiResource('produto', ProdutoController::class);
});
