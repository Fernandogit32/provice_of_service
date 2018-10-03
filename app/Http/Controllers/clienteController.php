<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\User;
use App\Endereco;

class clienteController extends Controller
{
    function formCadastro()
    {
        return view('cadastroCliente');
    }

    function criaCliente(request $request)
    {       
      $cliente = Cliente::create(['telefone'=> $request->telefone,'celular'=>$request->celular]);

      $endereco = Endereco::create(['cidade'=>$request->cidade,'bairro'=>$request->bairro,'rua'=>$request->rua,'numero'=>$request->numero]);
       $cliente->user_id=$request->id;     
       $cliente->endereco_id=$endereco->id;     
       $cliente->save();       
      return redirect()->action('clienteController@formCadastro');      
    }
}
