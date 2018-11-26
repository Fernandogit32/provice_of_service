@extends('layouts.app')
@section('content')
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
  
            <table class="table table-hover table-light table-pedido">
                    <thead>
                            <tr>
                              <th class="head-pedido" scope="col-md-5">Informações do Profissional</th>
                            </tr>
                          </thead>
                <tbody class="body-pedido" >
                    <tr>
                        <td><strong>Nome: </strong>{{$autonomo->user->name}}</td>
                    </tr>
                    <tr>
                        <td><strong>Profissão: </strong>{{$autonomo->profissao}}</td>
                    </tr>
                    <tr>
                        <td><strong>Telefone: </strong>{{$autonomo->telefone}}</td>
                    </tr>
                    <tr>
                        <td><strong>Celular: </strong>{{$autonomo->celular}}</td>
                    </tr>
                    <tr>
                        <td><strong>Descrição: </strong>{{$autonomo->descricao}}</td>
                    </tr>                     
                </tbody>
            </table>
            
<form action="pedir" method="POST">
        {{ csrf_field()}}
    <div class="form-group descricao-pedido">
        <label class="label-pedido" ><strong>Escreva uma descrição do serviço esperado</strong></label><br/>
        <input name="id_autonomo" value="<?php echo $_GET['pedido'];?>" type="hidden"/>           
        <textarea class="form-control" cols=130 name="descricao" rows="5"  maxlength="500" wrap="hard" placeholder="Explique com um breve resumo qual o serviço que você deseja."></textarea><br />
        <input type="submit" class="btn btn-primary btn-pedido" value="Enviar Pedido">
    </div>
    
</form><br/>

<h1 class="h1-pedido" >Comentários</h1>

@foreach ($autonomo->pedidos as $key => $value)
      @if ($value->status==4)      
      <?php       
        $data[]=explode(" ",$value->created_at);        
        $DiaMesAnos[0]=explode("-",$data[0][0]);      
        $comentarios[] = " <strong>Data:</strong> ". $DiaMesAnos[0][2]."-".$DiaMesAnos[0][1]."-".$DiaMesAnos[0][0]."&nbsp;&nbsp;&nbsp;<strong>Cliente -".$value->cliente->user->name." :</strong>".$value->comentario;
        unset($data);
        unset($DiaMesAnos);

       
        ?>  
 
     @endif
@endforeach

@if(isset($comentarios))
<?php $reversed = array_reverse($comentarios); ?>
@foreach ($reversed as $item)
<div class="card">
        <div class="card-body card-pedido"><?php echo $item; ?> </div>
    </div> <br />
@endforeach

@endif
 @endsection