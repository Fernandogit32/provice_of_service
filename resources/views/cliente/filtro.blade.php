@extends('layouts.app')
@section('content')

<div class="container filtro"> 
  <h1 class="h1-busca" >Faça a busca do profissional ideal para você</h1> 
  <div class="form-busca">  
    <form class="form col-md-12" action="filtrar" method="get">              
        <input name="text" class="form-control" type="search" placeholder="Buscar..." aria-label="Search"><br />
        <button class="btn btn-success" type="submit">Buscar</button>
      </form>
</div>
</div>



<?php if(isset($filtrados)){ ?>

@foreach ($filtrados as $autonomo)
<div class="opition card card-home mb-3" style="max-width: 18rem;">
        <img class="card-img-top margin-foto" style="max-height: 10rem;" src="{{ url("storage/imagens/".$autonomo->foto)}}" alt="{{$autonomo->foto}}" alt="Card image cap">
        <div class="card-body">
                <label class="card-text" ><strong>Nome: </strong>{{$autonomo->user->name}}</label>
                <br/> <label class="card-text" ><strong>Profissão: </strong>{{$autonomo->profissao}}</label>               
                <label class="card-text" ><strong>Media de Avaliação </strong>@if($autonomo->media==0) {{0}} @else {{$autonomo->media}}@endif</label><br />
                <label class="card-text" ><strong>N° de avaliações</strong></label>
                <?php
                $qtd=0;
                 $pedidosDoAltonomo = $autonomo->pedidos;
                   foreach ($pedidosDoAltonomo as $key => $value) {
                     if($value->status==4){
                       $qtd= $qtd+1;
                     }
                   } 
                   echo " ".$qtd;
                 ?><br/> 
                    <form  method="GET" action="/cliente/pedido">
                <button type="submit"  name="pedido" value="{{$autonomo->id}}" class="btn btn-success">Solicitar</button>
              </form>
    @endforeach
</div>
   

</div>
<?php }?>

@endsection
