<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfissionalController extends Controller
{
    function formCadastro(){
        return view('Profissional\CadastroProfissional');
    }
}
