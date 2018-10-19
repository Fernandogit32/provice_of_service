<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AutonomoRequest;
use App\Autonomo;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AutonomoController extends Controller
{
    function formCadastro(){
        return view('Autonomo\CadastroAutonomo');
    }

    function formSolicitacao(){
        $pedidos =  Auth::user()->autonomo->pedidos;
        return view('Autonomo\solicitacao')->with('pedidos',$pedidos);
    }
    function criaAutonomo(AutonomoRequest $request){
        $nameFile = null;
 
    // Verifica se informou o arquivo e se é válido
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
         
        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));
 
        // Recupera a extensão do arquivo
        $extension = $request->image->extension();
 
        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";
 
        // Faz o upload:
        $upload = $request->image->storeAs('imagens', $nameFile);
        // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
 
        // Verifica se NÃO deu certo o upload (Redireciona de volta)
        if ( !$upload )
           return redirect()->back()->with('error', 'Falha ao fazer upload')->withInput();
 
    }       

       if(Auth::user()->autonomo==null){          
        $autonomo =  Autonomo::create(['telefone'=>$request->telefone,
        'celular'=>$request->celular,'profissao'=>$request->profissao,
        'descricao'=>$request->descricao,'foto'=>$nameFile,'user_id'=>Auth::user()->id]);
        return redirect()->action('AutonomoController@formInformacoes');   
       }else{
        $autonomo = Auth::user()->autonomo;
        $autonomo->telefone = $request->telefone;
        $autonomo->celular = $request->celular;
        $autonomo->profissao = $request->profissao;        
        $autonomo->descricao = $request->descricao;
        if($nameFile!=""){
                       echo   $autonomo->foto;           
            Storage::delete('imagens/'.$autonomo->foto);
            $autonomo->foto =$nameFile;
        }
        $autonomo->save();
       }
       return redirect()->action('AutonomoController@formInformacoes');   
       
    }
    function formInformacoes(){
        return view('Autonomo\informacoes');
    }
}
