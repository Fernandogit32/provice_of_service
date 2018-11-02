@extends('layouts.app')
@section('content')

<div class="container">
<h1 id="h1-cliente">Solicitações de serviço</h1>
        <table class="table table-borderless">  
        <thead class="table-primary" >
                <tr>
                        <th scope="col">Profissional</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Celular</th>                            
                        <th scope="col">Profissão</th>                               
                        <th scope="col">Status</th>                               
                       
                    </tr>
        </thead>
                <tbody>
                            @foreach ($pedidos as $item)
                            @if($item->status==0||$item->status==1||$item->status==3)
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
                                        @if($item->status==3)
                                        <label>A sua solicitação foi recusada</label><br>
                                        <form action="excluir" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>   
                                            <input name="id" value="{{$item->id}}" type="hidden"/>
                                        <button type="submit" class="btn btn-danger">Excluir Pedido</button>
                                        </form>
                                        @elseif($item->status==1)
                                       <label>Serviço em curso</label>
                                        @else
                                        <label>Aguardando a confirmação</label>
                                        @endif   

                                    </td>
                                                                    
                                 </tr>
                                  <tr style="border-bottom-style:solid">                 
                                            <td colspan="9"><label style="color:red"><strong>Descrição:</strong></label>&nbsp&nbsp{{$item->descricao}} </td>
                                  </tr>
                                      @endif 
                            @endforeach
                </tbody>   
    
    </table>
    
</div>


 @endsection