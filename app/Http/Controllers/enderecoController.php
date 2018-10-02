<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class enderecoController extends Controller
{
    function criaEndereco($id_cliente,$cidade){
      echo 'id'. $id_cliente;
      echo 'cidade'. $cidade;
    }
}
