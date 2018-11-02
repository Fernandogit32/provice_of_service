@extends('layouts.app')
<div class="logo-fundo">
<div class="doutora">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card form-cadastro borda-cadastro">
                <div class="card-header titulo-registrar">{{ __('Registrar-se') }}</div>

                <div class="card-body registro">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" value="123456" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" value="123456" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Cadastro') }}</label>
                            {{-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary active">
                                  <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
                                </label> --}}
                              

                            <div class="btn-group btn-group-toggle col-md-6" data-toggle="buttons">
                              <label class="btn btn-success tipo" >Cliente <input id="tipo" type="radio" value="1" class="form-control{{ $errors->has('tipo') ? ' is-invalid' : '' }}" name="tipo" value="{{ old('tipo') }}" autocomplete="off" required></label>  
                              <label class="btn btn-success tipo">Profissional <input id="tipo" type="radio" value="2" class="form-control{{ $errors->has('tipo') ? ' is-invalid' : '' }}" name="tipo" value="{{ old('tipo') }}" autocomplete="off" required></label> 

                                @if ($errors->has('tipo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0 btn-registrar">
                            <div class="col-md-7 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
