@extends('layouts.app')
@section('content')
<div class="container">
    
    <?php 
    $limite=0; 
    $linha=0;   
    ?>

<h1 class="h1-homeCliente" >Aqui você encontra os melhores profissionais.</h1> 
  
   <div class="row">

    @foreach ($autonomos as $autonomo) 

    <div class="opition col-md-3 form-group">
        <img class="margin-foto" src="{{ url("storage/imagens/".$autonomo->foto)}}" alt="{{$autonomo->foto}}"/>
        <br/> <label><strong>Nome: </strong>{{$autonomo->user->name}}</label>
        <br/> <label><strong>Profissão: </strong>{{$autonomo->profissao}}</label>
        <br/> <label><strong>Descrição: </strong>{{$autonomo->descricao}}</label><br />
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

