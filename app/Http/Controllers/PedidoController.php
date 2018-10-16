<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Autonomo;
use App\Pedido;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    function formPedido(request $request){
     $autonomo = Autonomo::find($request->pedido);
     
       return view('cliente/ficha_de_pedido')->with('autonomo',$autonomo);
   }

   function pedir(request $request){     
          Pedido::create(['descricao'=>$request->descricao,'status'=>false,
          'cliente_id'=>Auth::user()->cliente->id,'autonomo_id'=>$request->autonomo_id]);
          return redirect()->action('HomeController@index');     
   }

}