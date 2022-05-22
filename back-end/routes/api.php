<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
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

Route::controller(ClienteController::class)->group(function () {
    Route::get('/clientes/apagados', 'onlyTrashed')->name('listar.clientes.deletados');
    Route::put('/clientes/restaurar-cliente/{id}', 'restoreTranshed')->name('restaurar.cliente.deletado');

    Route::delete('/clientes/apagar-permanentemente/{id}', 'forceDelete')->name('apagar.cliente.permanentemente');


    Route::get('/clientes', 'index')->name('listar.clientes');
    Route::get('/clientes/{id}', 'show')->name('listar.unico.cliente');
    Route::post('/clientes', 'store')->name('criar.cliente');
    Route::put('/clientes/alterar/{id}', 'update')->name('update.cliente');
    Route::delete('/clientes/deletar/{id}', 'delete')->name('delete.cliente');


});

Route::controller(PedidoController::class)->group(function () {
    Route::get('/pedidos/apagados', 'onlyTrashed')->name('listar.pedidos.deletados');
    Route::put('/pedidos/restaurar-pedido/{id}', 'restoreTranshed')->name('restaurar.pedido.deletado');

    Route::delete('/pedidos/apagar-permanentemente/{id}', 'forceDelete')->name('apagar.pedido.permanentemente');

    Route::get('/pedidos', 'index')->name('listar.pedidos');
    Route::get('/pedidos/{id}', 'show')->name('listar.unico.pedido');

    Route::post('/pedidos', 'store')->name('criar.pedido');
    Route::put('/pedidos/alterar/{id}', 'update')->name('update.pedido');
    Route::delete('/pedidos/deletar/{id}', 'delete')->name('delete.pedido');

});

Route::controller(ProdutoController::class)->group(function () {
    Route::get('/produtos/apagados', 'onlyTrashed')->name('listar.produtos.deletados');
    Route::put('/produtos/restaurar-produto/{id}', 'restoreTranshed')->name('restaurar.produto.deletado');

    Route::delete('/produtos/apagar-permanentemente/{id}', 'forceDelete')->name('apagar.produto.permanentemente');



    Route::get('/produtos', 'index')->name('listar.produtos');
    Route::get('/produtos/{id}', 'show')->name('listar.unico.produto');
    Route::post('/produtos', 'store')->name('criar.produto');
    Route::put('/produtos/alterar/{id}', 'update')->name('update.produto');
    Route::delete('/produtos/deletar/{id}', 'delete')->name('delete.produto');
});
