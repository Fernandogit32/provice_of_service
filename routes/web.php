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


Route::group(['prefix' => 'cliente'], function () {
    Route::get('/cadastro', 'clienteController@formCadastro');  
    Route::post('/cadastrar', 'clienteController@criaCliente');  
    
});

//-----------------------------------//--------------------------------------------

Route::group(['prefix' => 'endereco'], function () {
    Route::get('/cadastro/{id_cliente}{cidade}{bairro}{rua}{numero}{id_user}', 'enderecoController@criaEndereco');  
    
});

//------------------------------------------//-------------------------------------------

Route::group(['prefix' => 'Vincular'], function () {
    Route::get('Cliente{id_cliente}{id_endereco}{id_user}', 'vinculaController@vinculoCliente');  
    
});