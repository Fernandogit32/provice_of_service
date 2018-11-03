@extends('layouts.app')
@section('content')

<div class="container filtro">    
    <form class="form-inline my-2 my-lg-0" action="filtrar" method="get">              
        <input name="text" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
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
                    
                <button type="submit"  name="pedido" value="{{$autonomo->id}}" class="btn btn-success">Solicitar</button>
    @endforeach
</div>
   

</div>
<?php }?>

@endsection
