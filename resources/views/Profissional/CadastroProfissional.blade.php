@extends('cliente\menuCliente')
@section('menu')
<div class="container">

    <form action="cadastrar" method="post">
            {{ csrf_field() }}
            <input name="id" value="{{Auth::user()->id}}" type="hidden"/>           
        <h1>Contatos</h1>
        <div class="form-group">           
                <label>Telefone</label>
                <input type="tel" name="telefone" class="form-control" value="" placeholder="telefone">
                </div>
                <div class="form-group">
                    <label>Celular</label>
                    <input type="tel" name="celular" class="form-control" value="" placeholder=" Celular">
                </div>
                <div class="form-group">
                    <label>Profissão</label>
                    <input type="Text" name="profissao" class="form-control" value="" placeholder="Digite a sua Área">
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <textarea cols=155 name="descricao" rows="5" name="opiniao" maxlength="500" wrap="hard" placeholder="Escreva uma descrição dos serviços que voçê faz"></textarea>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </form>        
        </div> 
              
@extends('layouts.app')
@section('content')


@endsection
@endsection