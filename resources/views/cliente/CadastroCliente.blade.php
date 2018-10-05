@extends('cliente\menuCliente')
@section('menu')
<div class="container">
    <form action="cadastrar" method="post">
            {{ csrf_field() }}
            <input name="id" value="{{Auth::user()->id}}" type="hidden"/>           
        <h1>Contatos</h1>
        <div class="form-group">
            @if(Auth::user()->cliente!=null)
                <label>Telefone</label>
                <input type="tel" name="telefone" class="form-control" value="{{Auth::user()->cliente->telefone}}" placeholder="telefone">
                </div>
                <div class="form-group">
                    <label>Celular</label>
                    <input type="tel" name="celular" class="form-control" value="{{Auth::user()->cliente->celular}}" placeholder=" Celular">
                </div>
                <hr>
                <h1>Endereço</h1>
                <div class="form-group">
                    <label>Cidade</label>
                    <input type="text" name="cidade" value="{{Auth::user()->cliente->endereco->cidade}}" class="form-control" placeholder="Cidade">
                </div>
                <div class="form-group">
                    <label>Bairro</label>
                    <input type="text" name="bairro" value="{{Auth::user()->cliente->endereco->bairro}}" class="form-control" placeholder="Bairro">
                </div>
                <div class="form-group">
                    <label>Rua</label>
                    <input type="text" name="rua" value="{{Auth::user()->cliente->endereco->rua}}" class="form-control" placeholder="Rua">
                </div>
                <div class="form-group">
                    <label>Número</label>
                    <input type="number" name="numero" value="{{Auth::user()->cliente->endereco->numero}}" class="form-control" placeholder="Número">
                </div>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </form>
        
        </div>
        
            @else
            <label>Telefone</label>
            <input type="tel" name="telefone" class="form-control" value="" placeholder="telefone">
            </div>
            <div class="form-group">
                <label>Celular</label>
                <input type="tel" name="celular" class="form-control" value="" placeholder=" Celular">
            </div>
            <hr>
            <h1>Endereço</h1>
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" name="cidade" value="" class="form-control" placeholder="Cidade">
            </div>
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" name="bairro" value="" class="form-control" placeholder="Bairro">
            </div>
            <div class="form-group">
                <label>Rua</label>
                <input type="text" name="rua" value="" class="form-control" placeholder="Rua">
            </div>
            <div class="form-group">
                <label>Número</label>
                <input type="number" name="numero" value="" class="form-control" placeholder="Número">
            </div>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
    
    </div>
    @endif             
            
            
@extends('layouts.app')
@section('content')


@endsection
@endsection