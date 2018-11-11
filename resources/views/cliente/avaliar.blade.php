@extends('layouts.app')
@section('content')

<div class="corpo"> 




                <fieldset class="formAvaliação">
                        <legend>Avaliar</legend>
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
                                <div class="form-group descricao-pedido">
                                <label><img class="margin-foto imagem-avaliar" src="{{ url("storage/imagens/".$autonomo->foto)}}" alt="{{$autonomo->foto}}"/></label><br />
                                <label class="label-avaliar" ><strong>Nome:</strong> {{$autonomo->user->name}}</label>
                <form action="/cliente/avaliar" method="POST">
                                {{ csrf_field()}}
                        <strong>Escolha uma nota de 1 a 5</strong><br />
                             <input name="id" value="{{$autonomo->id}}" type="hidden"/>
                             <input name="id_pedido" value="{{$pedido->id}}" type="hidden"/>
                             Nota 1: <input name="nota" type="radio" value="1"/ >
                             Nota 2: <input name="nota" type="radio" value="2"/>
                             Nota 3: <input name="nota" type="radio" value="3"/>
                             Nota 4: <input name="nota" type="radio" value="4"/>
                             Nota 5: <input name="nota" type="radio" value="5"/>
                             <label>Escreva um comentario sobre o serviço que foi prestado</label>
                             <textarea class="form-control" cols=60 name="comentario" rows="5" name="opiniao" maxlength="500" wrap="hard" placeholder="Escreva o que você achou do serviço prestado..."></textarea>  <br />
                             <button type="submit" class="btn btn-primary">Enviar avaliação</button> 
                        </div>
                        </form>
                </fieldset>
  

</div>


@endsection