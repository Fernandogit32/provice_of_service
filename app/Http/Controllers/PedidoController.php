<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Autonomo;
use App\Pedido;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PedidoRequest;

class PedidoController extends Controller
{
    function formPedido(request $request){
     $autonomo = Autonomo::find($request->pedido);
     
       return view('cliente/ficha_de_pedido')->with('autonomo',$autonomo);
   }

   function pedir(PedidoRequest $request){            
          Pedido::create(['descricao'=>$request->descricao,'status'=>0,
          'cliente_id'=>Auth::user()->cliente->id,'autonomo_id'=> $request->id_autonomo]);
          return redirect()->action('HomeController@index');     
   }

   function formSolicitacao(){   
     $pedidos = Auth::user()->cliente->pedidos;
      return view('Cliente/solicitacao')->with('pedidos',$pedidos);
  }

  function gerarSevico(request $request){
    $pedido = Pedido::find($request->id);
    $pedido->status =1;
    $pedido->save();
    return redirect()->action('HomeController@index');  
  }
  function cancelarPedido(request $request){
    $pedido = Pedido::find($request->id);
    $pedido->status =3;
    $pedido->save();
    return redirect()->action('HomeController@index');  
  }

  function formAvaliacao(){
    $pedidos = Pedido::all();
    return view('Cliente/avaliacao')->with('pedidos',$pedidos);
  }
  function finalizarServico(request $request){
    $pedido = Pedido::find($request->id);
    $pedido->status =2;
    $pedido->save();
    return redirect()->action('HomeController@index');  
  }
  function excluir(request $request){
     $pedido = Pedido::find($request->id);
     $pedido->delete();
     return redirect()->action('HomeController@index');
  }

}
