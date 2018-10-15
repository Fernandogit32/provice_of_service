@extends('cliente\menuCliente')
@section('menu')
<div class="container">
    
    <?php 
    $limite=0; 
    $linha=0;   
    ?>
  
   <div class="row"> 

    @foreach ($autonomos as $autonomo) 
    
    <div class="opition col-md-3 form-group">
        <img height="100" src="{{ url("storage/imagens/".$autonomo->foto)}}" alt="{{$autonomo->foto}}"/>
       <br/> <label><strong>Nome: </strong>{{$autonomo->user->name}}</label>
       <br/> <label><strong>Profissao: </strong>{{$autonomo->profissao}}</label>
       <br/> <label><strong>descricao: </strong>{{$autonomo->descricao}}</label><br />
       <button type="button" value="{{$autonomo->id}}" class="btn btn-success">Solicitar</button>
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
@extends('layouts.app')
@section('content')



@endsection
@endsection
