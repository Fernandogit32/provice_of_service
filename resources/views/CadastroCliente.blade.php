@extends('layouts.app') @section('content')
<div class="container">
    <form action="cadastrar" method="post">
            {{ csrf_field() }}
            <input name="id" value="{{Auth::user()->id}}" type="hidden"/>
        <h1>Contatos</h1>
        <div class="form-group">
            <label>Telefone</label>
            <input type="tel" name="telefone" class="form-control" placeholder="telefone">
        </div>
        <div class="form-group">
            <label>Celular</label>
            <input type="tel" name="celular" class="form-control" placeholder=" Celular">
        </div>
        <hr>
        <h1>Endereço</h1>
        <div class="form-group">
            <label>Cidade</label>
            <input type="text" name="cidade" class="form-control" placeholder="Cidade">
        </div>
        <div class="form-group">
            <label>Bairro</label>
            <input type="text" name="bairro" class="form-control" placeholder="Bairro">
        </div>
        <div class="form-group">
            <label>Rua</label>
            <input type="text" name="rua" class="form-control" placeholder="Rua">
        </div>
        <div class="form-group">
            <label>Número</label>
            <input type="number" name="numero" class="form-control" placeholder="Número">
        </div>
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>

</div>

@endsection