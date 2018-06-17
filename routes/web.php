<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', "ProtudoController@listar");

Route::get('/testeProduto', "ProtudoController@listar");

Route::get('/adicionarProduto', "ProtudoController@adicionar");

Route::post('/cadastrarProduto', "ProtudoController@cadastrar");

Route::post('/salvarProduto', "ProtudoController@salvar");

Route::post('/apagarProduto', "ProtudoController@apagar");

Route::get('/editarProduto/{id}', "ProtudoController@editar");

Route::get('/removerProduto/{id}', "ProtudoController@remover");