@extends('layouts.app')
@section('content')

<div class="container-fluid">
        <h1 id="h1-cliente" >Avalie os trabalhos prestados</h1>
        <table class=" table table-striped table-avaliacao custom-sidebar">  
        <thead class="bg-primary head-avaliacao">
                <tr>
                                <th scope="col">Profissional</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Celular</th>                            
                                <th scope="col">Profissão</th>                               
                                <th scope="col">Status</th>                               
                                       
                </tr>
        </thead>
        <?php if(isset($pedidos)){ ?>
                <tbody>
        
                            @foreach ($pedidos as $item)
                            @if($item->status==2)
                                <tr>
                                    <td>
                                            {{$item->autonomo->user->name}} 
                                    </td>
                                    <td>
                                            {{$item->autonomo->telefone}} 
                                    </td>
                                    
                                    <td>
                                            {{$item->autonomo->celular}} 
                                    </td>
                                    
                                    <td>
                                            {{$item->autonomo->profissao}} 
                                    </td> 
                                    <td>
                                           
                                            
                                            <form action="frmAvaliar/id/id_ped" method="get">
                                            <input name="id" value="{{$item->autonomo->id}}" type="hidden"/> 
                                            <input name="id_ped" value="{{$item->id}}" type="hidden"/> 
                                            <input type="submit" class="btn btn-primary" value="Avaliar">
                                            </form>
                                          
                                          
                                    </td>                                                     
                                                                    
                                 </tr>
                                  <tr style="border-bottom-style:solid">                 
                                            <td colspan="9"><label style="color:blue"><strong>Descrição:</strong></label>&nbsp&nbsp{{$item->descricao}} </td>
                                      </tr>
                                      @endif 
                            @endforeach
                </tbody>   
        <?php }?>
    </table>
  
</div>


 @endsection