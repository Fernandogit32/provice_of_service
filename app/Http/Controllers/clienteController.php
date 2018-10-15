<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\User;
use App\Endereco;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Auth;

class clienteController extends Controller
{
    function formCadastro()
    {
        return view('cliente\cadastroCliente');
    }
    function formInformacoes()
    {        
        return view('cliente\informacoes');
    }


    function criaCliente(ClienteRequest $request)
    {  
        if(Auth::user()->cliente==null){
            $cliente = Cliente::create(['telefone'=> $request->telefone,'celular'=>$request->celular]);
            $endereco = Endereco::create(['cidade'=>$request->cidade,'cep'=>$request->cep,'bairro'=>$request->bairro,'rua'=>$request->rua,'numero'=>$request->numero]);
             $cliente->user_id=Auth::user()->id;     
             $cliente->endereco_id=$endereco->id;     
             $cliente->save();       
            return redirect()->action('clienteController@formInformacoes');   
        }else{            
              $cliente = cliente::find(Auth::user()->cliente->id);
              $cliente->telefone = $request->telefone;
              $cliente->celular = $request->celular;              
              $cliente->save();
              $endereco =Endereco::find($cliente->endereco->id);
              $endereco->cidade= $request->cidade;
              $endereco->bairro= $request->bairro;
              $endereco->rua= $request->rua;
              $endereco->numero= $request->numero;
              $endereco->save();
              return redirect()->action('clienteController@formInformacoes');            
            }     
         
    }
}
