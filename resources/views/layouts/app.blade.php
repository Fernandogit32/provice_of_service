<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="../img/favicon.ico">
    <title>Provision of Service</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/estilo.css">
</head>

<body>

    <div id="app">        
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <a href="{{ route('home') }}"><img id="myImg" class="logo" height="160" src="{{ URL::to('/img/logo.png') }}"></a>
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav nav-pills">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastrar-se') }}</a>
                            @endif
                        </li>
                        @else
                        <div class="btn-group editar">
                            <button type="button" class="btn btn-primary dropdown-toggle btn-editar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                            </button>
                           
                            
                            @if(Auth::user()->tipo==2)
                            @if(Auth::user()->autonomo!="")
                             <div class="foto">
                                    <img class="foto" src="{{ url("storage/imagens/".Auth::user()->autonomo->foto)}}" alt="{{Auth::user()->autonomo->foto}}"  />
                                </div>
                            
                            @endif
                            @endif
                           
                           
                            
                            <div class="dropdown-menu dropdown-menu editar" aria-labelledby="navbarDropdown">



                                @if(Auth::user()->tipo==1)
                                <a class="dropdown-item" href="/cliente/cadastro">{{ __('Editar Perfil') }}</a>
                                @else
                                <a class="dropdown-item" href="/autonomo/cadastro">{{ __('Editar Perfil') }}</a>
                                @endif
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>
                            </div>
                           
                           
                        </li>
                        @endguest
                    </ul>
                  
                </div>
            </div>        
        </nav>
        
        @if(Auth::check())
        @if(Auth::user()->tipo==1)
        <div class="container-fluid menu sticky-top">
            <script type="text/javascript" src="<?php echo asset('js/acao.js')?>"></script>
        <nav class="navbar navbar-expand-md navbar-expand-lg navbar-expand-xs">
            <a class="navbar-brand" href="\home">Home</a>                
            <a class="navbar-brand" href="\cliente\solicitacao">Solicitações</a>    
            <a class="navbar-brand" href="\cliente\avaliacao">Avaliação</a>    
            <a class="navbar-brand" href="\cliente\filtro">Buscar</a>
            <a class="navbar-brand" href="\cliente\informacao">Informações</a>     
          </nav>
        </div>
        @else
        <div class="container-fluid menu sticky-top">
            <nav class="navbar navbar-expand-lg navbar-expand-xs">
                <a class="navbar-brand" href="\home">Home</a>                    
                <a class="navbar-brand" href="\autonomo\solicitacao">Solicitações</a>    
                <a class="navbar-brand" href="\autonomo\servicos">Serviços</a> 
                <a class="navbar-brand" href="\autonomo\informacao">Informações</a>   
             </nav>
            </div>
          @endif
          @endif
          
          <div class="espacoMin">    
            
          
        
       
            @yield('content')
           
        
    
        
    </div>
      
    </div>
    <footer class="rodape navbar-fixed-bottom" > 
        <h2 class="h2-footer" >Você é um Profissional? Consiga Clientes. <br /> Você é cliente? Encontre o profissional que você deseja.</h2>
        <p class="p-footer"> ©Copyright 2018 Fernando, Diego, Jessica, Jhonatan e Jocivania. Todos os direitos reservados.
        <img id="myImg" class="instagram" height="32" src="{{ URL::to('/img/instagram.png') }}">
        <img id="myImg" class="facebook" height="50" src="{{ URL::to('/img/facebook.png') }}"></p>
    </footer>
</body>

</html>