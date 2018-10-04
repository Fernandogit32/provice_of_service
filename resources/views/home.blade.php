
@extends('cliente\menuCliente')


@section('menu')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bem vindo {{Auth::user()->name }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! pagina Do Usuário
                </div>
            </div>
        </div>
    </div>
</div>
@extends('layouts.app')
@section('content')



@endsection
@endsection
