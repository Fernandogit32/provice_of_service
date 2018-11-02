@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card form-cadastro">
                <div class="card-header">{{ __('Verificar seu E-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um novo link de verificação foi enviado para seu endereço de e-mail.') }}
                        </div>
                    @endif

                    {{ __('Antes de prosseguir, verifique seu e-mail em busca de um link de verificação.') }}
                    {{ __('Se você não recebeu o email.') }}, <a href="{{ route('verification.resend') }}">{{ __('clique aqui para solicitar outro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
