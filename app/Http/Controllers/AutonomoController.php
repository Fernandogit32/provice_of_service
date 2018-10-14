<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AutonomoRequest;
use App\Autonomo;
use App\User;
use Illuminate\Support\Facades\Auth;

class AutonomoController extends Controller
{
    function formCadastro(){
        return view('Autonomo\CadastroAutonomo');
    }
    function criaAutonomo(AutonomoRequest $request){
       if(Auth::user()->autonomo==null){
        $autonomo =  Autonomo::create(['telefone'=>$request->telefone,
        'celular'=>$request->celular,'profissao'=>$request->profissao,
        'descricao'=>$request->descricao,'user_id'=>Auth::user()->id]);
        return redirect()->action('AutonomoController@formInformacoes');   
       }else{
        $autonomo = Auth::user()->autonomo;
        $autonomo->telefone = $request->telefone;
        $autonomo->celular = $request->celular;
        $autonomo->profissao = $request->profissao;
        $autonomo->descricao = $request->descricao;
        $autonomo->save();
       }
       return redirect()->action('AutonomoController@formInformacoes');   

    }
    function formInformacoes(){
        return view('Autonomo\informacoes');
    }
}
