@extends('layouts.app')
@section('content')

<div class="container">
<h1>Solicitações Aguardando Aprovação</h1>
        <table class=" table table-borderless table-dark">  
        
                <tbody>
                        <tr>
                                <th scope="col">Profissional</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Celular</th>                            
                                <th scope="col">Profissao</th>                               
                                <th scope="col">Status</th>                               
                               
                            </tr>
                            @foreach ($pedidos as $item)
                            @if($item->status==0||$item->status==3)
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