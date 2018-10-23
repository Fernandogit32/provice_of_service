@extends('layouts.app')
@section('content')

<div class="container">

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
                            @if($item->status==1||$item->status==2)
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
                                            @if($item->status==1)
                                            {{'Serviso em curso'}}
                                            @else
                                            <form action="#"></form>
                                            <input type="submit" class="btn btn-primary" value="Avaliar">
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