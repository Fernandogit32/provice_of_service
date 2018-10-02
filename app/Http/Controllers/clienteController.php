<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\User;

class clienteController extends Controller
{
    function formCadastro()
    {
        return view('cadastroCliente');
    }

    function criaCliente(request $request)
    {       
      $cliente = Cliente::create(['telefone'=> $request->telefone,'celular'=>$request->celular]);
      $id=$cliente->id; 
            
     return redirect()->action('enderecoController@criaEndereco',['id_cliente' => $id,'cidade'=>$request->cidade]);
    }
}
