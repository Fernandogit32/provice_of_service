@extends('layouts.app')
@section('content')
<div class="container">
    <h1 id="h1-cliente" >Suas informações</h1>
    <div class="card">
        
        @if(Auth::user()->cliente!=null)
        <div class="card-header">Nome: {{Auth::user()->name }}</div>
        <div class="card-header">E-mail: {{Auth::user()->email }}</div>
        <div class="card-header">Telefone: {{Auth::user()->cliente->telefone}}</div>
        <div class="card-header">Celular: {{Auth::user()->cliente->celular}}</div>
        <div class="card-header">CEP: {{Auth::user()->cliente->endereco->cep}}</div>
        <div class="card-header">Cidade: {{Auth::user()->cliente->endereco->cidade}}</div>
        <div class="card-header">Bairro: {{Auth::user()->cliente->endereco->bairro}}</div>
        <div class="card-header">Rua: {{Auth::user()->cliente->endereco->rua}}</div>
        <div class="card-header">Número: {{Auth::user()->cliente->endereco->numero}}</div>
        @else
        <div class="card-header">Nome: {{Auth::user()->name }}</div>
        <div class="card-header">E-mail: {{Auth::user()->email }}</div>
        @endif


    </div>
</div>
   @endsection