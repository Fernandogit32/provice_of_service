<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AutonomoRequest;
use App\Autonomo;
use App\User;

class AutonomoController extends Controller
{
    function formCadastro(){
        return view('Autonomo\CadastroAutonomo');
    }
    function criaAutonomo(AutonomoRequest $request){
       if(User::find($request->id)->autonomo==null){
        $autonomo =  Autonomo::create(['telefone'=>$request->telefone,
        'celular'=>$request->celular,'profissao'=>$request->profissao,
        'descricao'=>$request->descricao,'user_id'=>$request->id]);
        return redirect()->action('AutonomoController@formInformacoes');   
       }else{
        $autonomo = User::find($request->id)->autonomo;
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
