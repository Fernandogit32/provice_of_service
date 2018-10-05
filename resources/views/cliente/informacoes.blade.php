@extends('cliente\menuCliente')
@section('menu')
<div class="container">
<div class="card">

    <div class="card-header">Nome: {{Auth::user()->name }}</div>    
    <div class="card-header">Telefone: {{Auth::user()->cliente->telefone}}</div>    
    <div class="card-header">Celular: {{Auth::user()->cliente->celular}}</div> 
    <div class="card-header">Cidade: {{Auth::user()->cliente->endereco->cidade}}</div> 
    <div class="card-header">Bairro: {{Auth::user()->cliente->endereco->bairro}}</div> 
    <div class="card-header">Rua: {{Auth::user()->cliente->endereco->rua}}</div> 
    <div class="card-header">Número: {{Auth::user()->cliente->endereco->numero}}</div> 

    
</div>
@extends('layouts.app')
@section('content')
@endsection
@endsection

