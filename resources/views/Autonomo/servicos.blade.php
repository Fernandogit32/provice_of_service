@extends('layouts.app')
@section('content')

<div class="container">

    <table class="table table-borderless table-dark">

        <tbody>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Celular</th>
                <th scope="col">Cidade</th>
                <th scope="col">Bairro</th>
                <th scope="col">Rua</th>
                <th scope="col">Número</th>
                <th scope="col">Finalizar Serviço</th>             
            </tr>
            @foreach ($pedidos as $item)
             @if($item->status==1)
            <tr>
                <td>
                    {{$item->cliente->user->name}} 
                </td>
                <td>
                    {{$item->cliente->telefone}}
                </td>
                <td>
                    {{$item->cliente->celular}}
                </td>
                <td>
                    {{$item->cliente->endereco->cidade}}
                </td>
                <td>
                    {{$item->cliente->endereco->bairro}}
                </td>
                <td>
                    {{$item->cliente->endereco->rua}}
                </td>
                <td>
                    {{$item->cliente->endereco->numero}} 
                </td>
                <td>
                    <form action="finalizar" method="post">
                            {{ csrf_field() }}
                            <input name="id" value="{{$item->id}}" type="hidden"/>
                        <button type="submit" class="btn btn-secondary">Finalizar</button>
                    </form>
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