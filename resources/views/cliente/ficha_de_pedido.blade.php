@extends('layouts.app')
@section('content')
<div class="container">
        <div class="container">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
    <h1>Informações do Profissional
        <h1>
            <table class="table table-borderless table-dark">
                <tbody>
                    <tr>
                        <td>Nome: {{$autonomo->user->name}}</td>
                    </tr>
                    <tr>
                        <td>Profissão: {{$autonomo->profissao}}</td>
                    </tr>
                    <tr>
                        <td>Telefone: {{$autonomo->telefone}}</td>
                    </tr>
                    <tr>
                        <td>Celular: {{$autonomo->celular}}</td>
                    </tr>
                    <tr>
                        <td>Descrição: {{$autonomo->descricao}}</td>
                    </tr>                     
                </tbody>
            </table>
            
<form action="pedir" method="POST">
        {{ csrf_field()}}
    <div class="form-group">
        <label>Escreva uma descrição do serviço esperado</label><br/>
        <input name="id_autonomo" value="<?php echo $_GET['pedido'];?>" type="hidden"/>           
        <textarea cols=56 name="descricao" rows="5"  maxlength="500" wrap="hard" placeholder="Explique com um breve resumo qual o serviço que você deseja"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar Pedido">
</form>
</div>
 @endsection