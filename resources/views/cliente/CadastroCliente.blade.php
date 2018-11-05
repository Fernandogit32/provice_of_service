@extends('layouts.app')
@section('content')
<script type="text/javascript">
    $("#telefone").mask("(00) 0000-0000");
    $("#celular").mask("(00) 00000-0000");                                
</script>

<div class="corpo">   

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
        
        <div class="card card-cadastro-cliente">
        <form class="form-cadastro-cliente" action="cadastrar" method="post">
            {{ csrf_field() }}
            <div class="card-header bg-primary header-cadastro-cliente">
            <h1>Contatos</h1>
            </div>
            <div class="body-cadastro-cliente">
            <div class="form-group">
                @if(Auth::user()->cliente!=null)
                <label>Telefone</label>
                <input type="text" name="telefone" id="telefone" class="form-control" value="{{Auth::user()->cliente->telefone}}" placeholder="telefone">
            </div>
            
            <div class="form-group">
                <label>Celular</label>
                <input type="text" name="celular" id="celular" class="form-control" value="{{Auth::user()->cliente->celular}}" placeholder=" Celular">
            </div>
            </div>
            <div class="card-header bg-primary header-cadastro-cliente">
            <h1>Endereço</h1>
            </div>  
            <div class="body-cadastro-cliente">
            <div class="form-group">
                <label>CEP</label>
                <input name="cep" type="text" id="cep" maxlength="9" value="{{Auth::user()->cliente->endereco->cep}}" class="form-control"
                    placeholder="Cidade" onkeyup="pesquisacep(this.value);" />
            </div>
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" name="cidade" id="cidade" value="{{Auth::user()->cliente->endereco->cidade}}" class="form-control" placeholder="Cidade">
            </div>
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" name="bairro" id="bairro" value="{{Auth::user()->cliente->endereco->bairro}}" class="form-control" placeholder="Bairro">
            </div>
            <div class="form-group">
                <label>Rua</label>
                <input type="text" name="rua" id="rua" value="{{Auth::user()->cliente->endereco->rua}}" class="form-control" placeholder="Rua">
            </div>
            <div class="form-group">
                <label>Número</label>
                <input type="number" name="numero" value="{{Auth::user()->cliente->endereco->numero}}" class="form-control" placeholder="Número">
            </div>
           
                <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
        </div>
        @else
        <div class="form-group">
    <label>Telefone</label>
    
        <input type="tel" name="telefone" id="telefone" class="form-control" value="" placeholder="telefone">
    </div>
    <div class="form-group">
        <label>Celular</label>
        <input type="tel" name="celular" id="celular" class="form-control" value="" placeholder=" Celular">
    </div>
    <hr>
    <h1>Endereço</h1>
    <div class="form-group">
        <label>Cep</label>
        <input name="cep" type="text" id="cep" maxlength="9" value="" class="form-control" placeholder="Cidade" onkeyup="pesquisacep(this.value);"
        />
    </div>
    <div class="form-group">
        <label>Cidade</label>
        <input type="text" id="cidade" name="cidade" value="" class="form-control" placeholder="Cidade">
    </div>
    <div class="form-group">
        <label>Bairro</label>
        <input type="text" id="bairro" name="bairro" value="" class="form-control" placeholder="Bairro">
    </div>
    <div class="form-group">
        <label>Rua</label>
        <input type="text" id="rua" name="rua" value="" class="form-control" placeholder="Rua">
    </div>
    <div class="form-group">
        <label>Número</label>
        <input type="number" name="numero" value="" class="form-control" placeholder="Número">
    </div>
    <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>
</div>
</div>
</div>
</div>

</div>
@endif 
  @endsection