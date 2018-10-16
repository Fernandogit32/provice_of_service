<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PedidoController extends Controller
{
   public function formPedido(request $request){
     
       return view('cliente/ficha_de_pedido')->with('id',$request->id);
   }
}
