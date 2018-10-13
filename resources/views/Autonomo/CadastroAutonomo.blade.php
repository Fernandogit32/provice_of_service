@extends('Autonomo\menuAutonomo')
 @section('menuAutonomo')
<div class="container">
    <script type="text/javascript">
        $("#telefone").mask("(00) 0000-0000");
        $("#celular").mask("(00) 00000-0000");                                
    </script>
    
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
   
    <form action="cadastrar" method="post">
        {{ csrf_field() }}
        <input name="id" value="{{Auth::user()->id}}" type="hidden" />
        <h1>Contatos</h1>
        <div class="form-group">
            @if(Auth::user()->autonomo!=null)
            <label>Telefone</label>
            <input type="tel" name="telefone" id="telefone" class="form-control" value="{{Auth::user()->autonomo->telefone}}" placeholder="telefone">
        </div>
        <div class="form-group">
            <label>Celular</label>
            <input type="tel" name="celular" id="celular" class="form-control" value="{{Auth::user()->autonomo->celular}}" placeholder=" Celular">
        </div>
        <div class="form-group">
            <label>Profissão</label>
            <input type="Text" name="profissao" class="form-control" value="{{Auth::user()->autonomo->profissao}}" placeholder="Digite a sua Área">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea cols=155 name="descricao" rows="5" name="opiniao" maxlength="500" wrap="hard" placeholder="Escreva uma descrição dos serviços que voçê faz">{{Auth::user()->autonomo->descricao}}</textarea>
        </div>
        @else
        <label>Telefone</label>
        <input type="tel" name="telefone" id="telefone" class="form-control" value="" placeholder="telefone">
</div>
<div class="form-group">
    <label>Celular</label>
    <input type="tel" name="celular" id="celular" class="form-control" value="" placeholder=" Celular">
</div>
<div class="form-group">
    <label>Profissão</label>
    <input type="Text" name="profissao" class="form-control" value="" placeholder="Digite a sua Área">
</div>
<div class="form-group">
    <label>Descrição</label>
    <textarea cols=155 name="descricao" rows="5" name="opiniao" maxlength="500" wrap="hard" placeholder="Escreva uma descrição dos serviços que voçê faz"></textarea>
</div>
@endif

<button type="submit" class="btn btn-primary">Confirmar</button>
</form>
</div>

@extends('layouts.app')
 @section('content')
  @endsection 
  @endsection