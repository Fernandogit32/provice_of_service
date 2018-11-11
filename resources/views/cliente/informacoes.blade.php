@extends('layouts.app')
@section('content')
<div class="container">
    <h1 id="h1-cliente" >Suas informações</h1>
    <div class="card card-informacao">
        
        @if(Auth::user()->cliente!=null)
        <div class="card-header"><strong>Nome: </strong>{{Auth::user()->name }}</div>
        <div class="card-header"><strong>E-mail: </strong>{{Auth::user()->email }}</div>
        <div class="card-header"><strong>Telefone: </strong>{{Auth::user()->cliente->telefone}}</div>
        <div class="card-header"><strong>Celular: </strong>{{Auth::user()->cliente->celular}}</div>
        <div class="card-header"><strong>CEP: </strong>{{Auth::user()->cliente->endereco->cep}}</div>
        <div class="card-header"><strong>Cidade: </strong>{{Auth::user()->cliente->endereco->cidade}}</div>
        <div class="card-header"><strong>Bairro: </strong>{{Auth::user()->cliente->endereco->bairro}}</div>
        <div class="card-header"><strong>Rua: </strong>{{Auth::user()->cliente->endereco->rua}}</div>
        <div class="card-header"><strong>Número: </strong>{{Auth::user()->cliente->endereco->numero}}</div>
        @else
        <div class="card-header"><strong>Nome: </strong>{{Auth::user()->name }}</div>
        <div class="card-header"><strong>E-mail: </strong>{{Auth::user()->email }}</div>
        @endif


    </div>
</div>
   @endsection