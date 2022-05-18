<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(ClienteController::class)->group(function(){
    Route::get('/clientes', 'index')->name('listar.clientes');
    Route::get('/clientes/{id}', 'show')->name('listar.unico.cliente');
    Route::post('/clientes', 'store')->name('criar.cliente');
    Route::put('/clientes/alterar/{id}', 'update')->name('update.cliente');
    Route::delete('/clientes/deletar/{id}', 'delete')->name('delete.cliente');
});
