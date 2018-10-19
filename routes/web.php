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
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'cliente','middleware'=>'auth.User'], function () {
    Route::get('/cadastro', 'clienteController@formCadastro');  
    Route::post('/cadastrar', 'clienteController@criaCliente');      
    Route::get('/informacao', 'clienteController@formInformacoes');  
    Route::get('/pedido', 'PedidoController@formPedido')->middleware('auth.Cliente');      
    Route::post('/pedir', 'PedidoController@pedir');  
    Route::get('/solicitacao', 'PedidoController@formAvaliar')->middleware('auth.Cliente');  
    
});


Route::group(['prefix' => 'autonomo','middleware'=>'auth.Autonomo'], function () {
    Route::get('/cadastro', 'AutonomoController@formCadastro');  
    Route::post('/cadastrar', 'AutonomoController@criaAutonomo');  
    Route::get('/informacao', 'AutonomoController@formInformacoes');  
    Route::get('/solicitacao', 'AutonomoController@formSolicitacao')->middleware('verifica.autonomo');      ;  
});