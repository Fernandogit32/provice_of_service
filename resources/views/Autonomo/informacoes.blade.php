@extends('layouts.app')
@section('content')
<div class="container">
    <h1 id="h1-autonomo" >Suas informações</h1>
    <div class="card card-informacao">

        @if(Auth::user()->autonomo!=null)
        <div class="card-header"><strong>Nome: </strong>{{Auth::user()->name }}</div>
        <div class="card-header"><strong>E-mail: </strong>{{Auth::user()->email }}</div>
        <div class="card-header"><strong>Telefone: </strong>{{Auth::user()->autonomo->telefone}}</div>
        <div class="card-header"><strong>Celular: </strong>{{Auth::user()->autonomo->celular}}</div>
        <div class="card-header"><strong>Profissão: </strong>{{Auth::user()->autonomo->profissao}}</div>       
        <div class="card-header"><strong>Descricão: </strong>{{Auth::user()->autonomo->descricao}}</div>       
        @else
        <div class="card-header"><strong>Nome: </strong>{{Auth::user()->name }}</div>
        <div class="card-header"><strong>E-mail: </strong>{{Auth::user()->email }}</div>
        @endif


    </div>
</div>
   @endsection