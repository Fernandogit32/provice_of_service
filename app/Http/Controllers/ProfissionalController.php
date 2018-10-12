<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profissional;
use Illuminate\Foundation\Auth\User;

class ProfissionalController extends Controller
{
    function formCadastro(){
        return view('Profissional\CadastroProfissional');
    }

    function criaProfissional(request $request){      
               
    }
}
