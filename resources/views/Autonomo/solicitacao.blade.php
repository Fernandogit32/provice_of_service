@extends('Autonomo\menuAutonomo') @section('menuAutonomo')

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
                <th scope="col">Aceitar</th>
                <th scope="col">Recusar</th>
            </tr>
            @foreach ($pedidos as $item)
             @if($item->status==false)
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
                    <button class="btn btn-success">Aceitar</button>
                </td>
                <td>
                    <button class="btn btn-danger">Recusar</button>
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

@extends('layouts.app') @section('content') @endsection @endsection