<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Provision Of Service</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                color: #E0EEEE;
                font-family: 'gotham', sans-serif;
                font-weight: 200;
                height: bold;
                margin: 0;
                width: auto; 
                height: auto;
                background: url('img/fundo.jpg');
                background-size: cover;
                text-shadow: 0.1em 0.1em 0.2em black
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #E0EEEE;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            h1 {
                color: #E0EEEE;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="flex-center position-ref full-height ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Cadastre-se</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    PROVISION OF SERVICE
                </div>

                <div class="links">
                    <h1>A procura dos melhores profissionais autônomos</h1>
                    {{-- <a href="https://laravel.com/docs">Documentation</a> --}}
                    {{-- <a href="https://laracasts.com">Laracasts</a> --}}
                    {{-- <a href="https://laravel-news.com">News</a> --}}
                    {{-- <a href="https://nova.laravel.com">Nova</a> --}}
                    {{-- <a href="https://forge.laravel.com">Forge</a> --}}
                    {{-- <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                </div>
            </div>
        </div>
    </body>
</html>
