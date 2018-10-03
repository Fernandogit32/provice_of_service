<?php

namespace App\Http\Controllers;
use App\Cliente;
use App\User;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class vinculaController extends Controller
{
    function vinculoCliente($id_endereco,$id_cliente,$id_user){
       echo $id_endereco;
       echo $id_cliente;
       echo $id_user;
        
    }
}
