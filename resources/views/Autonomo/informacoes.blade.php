@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">

        @if(Auth::user()->autonomo!=null)

        <div class="card-header">Nome: {{Auth::user()->name }}</div>
        <div class="card-header">E-mail: {{Auth::user()->email }}</div>
        <div class="card-header">Telefone: {{Auth::user()->autonomo->telefone}}</div>
        <div class="card-header">Celular: {{Auth::user()->autonomo->celular}}</div>
        <div class="card-header">Profissao: {{Auth::user()->autonomo->profissao}}</div>       
        <div class="card-header">Descricao: {{Auth::user()->autonomo->descricao}}</div>       
        @else
        <div class="card-header">Nome: {{Auth::user()->name }}</div>
        <div class="card-header">E-mail: {{Auth::user()->email }}</div>
        @endif


    </div>
</div>
   @endsection