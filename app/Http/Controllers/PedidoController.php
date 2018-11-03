<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Autonomo;
use App\Pedido;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PedidoRequest;
use DB;



class PedidoController extends Controller
{
  function formPedido(request $request)
  {
    $autonomo = Autonomo::find($request->pedido);

    return view('cliente/ficha_de_pedido')->with('autonomo', $autonomo);
  }

  function pedir(PedidoRequest $request)
  {
    Pedido::create([
      'descricao' => $request->descricao, 'status' => 0,
      'cliente_id' => Auth::user()->cliente->id, 'autonomo_id' => $request->id_autonomo
    ]);
    return redirect()->action('HomeController@index');
  }

  function formSolicitacao()
  {
    $pedidos = Auth::user()->cliente->pedidos;
    return view('Cliente/solicitacao')->with('pedidos', $pedidos);
  }

  function gerarSevico(request $request)
  {
    $pedido = Pedido::find($request->id);
    $pedido->status = 1;
    $pedido->save();
    return redirect()->action('HomeController@index');
  }
  function cancelarPedido(request $request)
  {
    $pedido = Pedido::find($request->id);
    $pedido->status = 3;
    $pedido->save();
    return redirect()->action('HomeController@index');
  }

  function formAvaliacao()
  {
    if (Auth::user()->cliente->pedidos != null) {
      $pedidos = Auth::user()->cliente->pedidos;
      return view('Cliente/avaliacao')->with('pedidos', $pedidos);
    } else {
      return view('Cliente/avaliacao');
    }

  }

  function formAvaliar(request $request)
  {

    return view('Cliente/avaliar')->with('autonomo', Autonomo::find($request->id))->with('pedido', Pedido::find($request->id_ped));
  }

  function finalizarServico(request $request)
  {
    $pedido = Pedido::find($request->id);
    $pedido->status = 2;
    $pedido->save();
    return redirect()->action('HomeController@index');
  }

  function excluir(request $request)
  {
    $pedido = Pedido::find($request->id);
    $pedido->delete();
    return redirect()->action('HomeController@index');
  }

  function avaliar(request $request)
  {


    $pedido = Pedido::find($request->id_pedido);
    $autonomo = Autonomo::find($request->id);
    $pedido->status = 4;
    $pedido->comentario = $request->comentario;
    $pedido->save();
    $pedidos = DB::table('pedidos')->where('autonomo_id', $request->id)->where('status', 4)->get();
    $autonomo->media = ($autonomo->soma + $request->nota) / count($pedidos);
    $autonomo->soma = $autonomo->soma + $request->nota;
    $autonomo->save();
    return redirect()->action('HomeController@index');

  }
  function formFiltro(request $request)
  {
    return view('cliente/filtro');
  }

  function filtrar(request $request)
  {

    if ($request->text != "") {

      $filtrados = array();
      //$autonomos = DB::table('autonomos')->where('profissao', $request->text)->get();
      $autonomos=  Autonomo::where('profissao', 'LIKE', "%$request->text%")->get();
     

      foreach ($autonomos as $key => $value) {
        $filtrados[] = Autonomo::find($value->id);
      }
    }
    if (isset($filtrados)) {     
      return view('cliente/filtro')->with('filtrados', $filtrados);
    } else {     

      return view('cliente/filtro');
    }
     
    return view('cliente/filtro');


  }

}
