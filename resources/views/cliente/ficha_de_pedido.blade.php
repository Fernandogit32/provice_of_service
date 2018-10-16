@extends('cliente\menuCliente') @section('menu')
<div class="container">
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

<form action="pedir" method="post">
        {{ csrf_field()}}
    <div class="form-group">
        <label>Escreva uma descrição do serviço esperado</label><br/>
        <input name="id_autonomo" value="{{$autonomo->id}}" type="hidden"/>           
        <textarea cols=57 name="descricao" rows="5" name="opiniao" maxlength="500" wrap="hard" placeholder="Eplique com um breve resumo qual o serviço que vc deseja"></textarea>
       
    </div>
    <button type="subimit" class="btn btn-primary">Enviar Pedido</button>
</form>
</div>
@extends('layouts.app') @section('content') @endsection @endsection