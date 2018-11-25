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
                             <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                             <div class="estrelas">                              
                               <label for="cm_star-1"><i class="fa"></i></label>
                               <input type="radio" name="nota" id="cm_star-1" name="fb" value="1"/>
                               <label for="cm_star-2"><i class="fa"></i></label>
                               <input type="radio" name="nota" id="cm_star-2" name="fb" value="2"/>
                               <label for="cm_star-3"><i class="fa"></i></label>
                               <input type="radio" name="nota" id="cm_star-3" name="fb" value="3"/>
                               <label for="cm_star-4"><i class="fa"></i></label>
                               <input type="radio" name="nota" id="cm_star-4" name="fb" value="4"/>
                               <label for="cm_star-5"><i class="fa"></i></label>
                               <input type="radio" name="nota" id="cm_star-5" name="fb" value="5" checked/>
                             </div>
                             <label>Escreva um comentario sobre o serviço que foi prestado</label>
                             <textarea class="form-control" cols=60 name="comentario" rows="5" name="opiniao" maxlength="500" wrap="hard" placeholder="Escreva o que você achou do serviço prestado..."></textarea>  <br />
                             <button type="submit" class="btn btn-primary">Enviar avaliação</button> 
                        </div>
                        </form>
                </fieldset>
  

</div>


@endsection