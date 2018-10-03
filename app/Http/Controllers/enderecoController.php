<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Endereco;

class enderecoController extends Controller
{
    function criaEndereco($id_cliente,$cidade,$bairro,$rua,$numero,$id_user){
      $endereco = Endereco::create(['cidade'=>$cidade,'bairro'=>$bairro,'rua'=>$rua,'numero'=>$numero]);
      $id_endereco= $endereco->id;         
      return redirect()->action('vinculaController@vinculoCliente',['id_cliente' => $id_cliente,'id_endereco'=>$id_endereco,'id_user'=>$id_user]);
    }
}
