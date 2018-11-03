@extends('layouts.app')
@section('content')
<div class="container">
    
    <?php 
    $limite=0; 
    $linha=0;   
    ?>
<div class="icones" >
<label><img id="myImg" class="" height="50" src="{{ URL::to('/img/lupa.png') }}"><br /><strong> Procure o melhor profissional</strong><br /> Procure os mais qualificados entre<br /> diaristas, eletricistas, mecânicos, etc</label>
<label><img id="myImg" class="" height="50" src="{{ URL::to('/img/joia.png') }}"><br /><strong>Escolha o que você quer</strong><br />Pegue o contato do profissional<br /> escolhido e negocie diretos com eles. </label>
<label><img id="myImg" class="" height="30" src="{{ URL::to('/img/estrelas.png') }}"><br /><strong>Avalie o profissional</strong><br />Dê uma nota para seu trabalho<br /> e uma breve descrição dos serviços prestados. </label>
</div>

<h1 class="h1-homeCliente" >Aqui você encontra os melhores profissionais.</h1> 
  
   <div class="row">

    @foreach ($autonomos as $autonomo) 

    <div class="opition col-md-3 form-group">
        <img class="margin-foto" src="{{ url("storage/imagens/".$autonomo->foto)}}" alt="{{$autonomo->foto}}"/>
        <br/> <label><strong>Nome: </strong>{{$autonomo->user->name}}</label>
        <br/> <label><strong>Profissão: </strong>{{$autonomo->profissao}}</label>
        <br/> <label><strong>Descrição: </strong>{{$autonomo->descricao}}</label><br />
        <label><strong>Media de Avaliação </strong>@if($autonomo->media==0) {{0}} @else {{$autonomo->media}}@endif</label><br />
        <label><strong>N° de avaliações</strong></label>

         <?php
         $qtd=0;
          $pedidosDoAltonomo = $autonomo->pedidos;
            foreach ($pedidosDoAltonomo as $key => $value) {
              if($value->status==4){
                $qtd= $qtd+1;
              }
            } 
            echo " ".$qtd;
             ?>       
        

        <form  method="GET" action="cliente/pedido">
            <button type="submit"  name="pedido" value="{{$autonomo->id}}" class="btn btn-success">Solicitar</button>
        </form>
    </div> 
    
    
    <?php 
    $limite+=1; 
    if($limite==12){
        $limite=0; 
        break;
    } 
    ?>
      
    @endforeach
</div>
   

</div>




@endsection

