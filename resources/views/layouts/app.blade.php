<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/ico.webp') }}" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/clean-blog.min.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="//vjs.zencdn.net/7.3.0/video-js.min.css" rel="stylesheet">

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Shape-e') }}</title>
    <!-- Scripts -->
    
    
    <script src="{{ asset('js/movimineto.js') }}" charset="utf-8" defer></script>
    <script src="{{ asset('js/app.js') }}" charset="utf-8" defer></script>
    <script src="{{ asset('js/optimizacion.js') }}" charset="utf-8" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script>
    $(document).ready(function() {
            (function($) {
    "use strict";

    // manual carousel controls
    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
    
})(jQuery);
            //agregar codigo
            $("#btnDescripcion").on("click",function(){
                $("#recursos").css({"display":"none"});
                $("#btnDescripcion").css({"border-bottom":"3px solid #ffffff"});
                $("#btnArchivos").css({"border-bottom":"3px solid #007bff"});
                $("#descripcion").css({"display":"block", "border-bottom":"#ffffff"});
            });

            $("#btnArchivos").on("click",function(){
                $("#descripcion").css({"display":"none", "border-bottom":"3px solid #ffffff"});
                $("#btnDescripcion").css({"border-bottom":"3px solid #007bff"});
                $("#btnArchivos").css({"border-bottom":"3px solid #ffffff"});
                $("#recursos").css({"display":"block"});
            });

        
        });
 
    </script>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151978887-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151978887-1');
</script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('Font-ico/css/all.css') }}" rel="stylesheet"> <!--load all styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

     <!-- <link href="{{ asset('css/cssdesarrollo.css') }}" rel="stylesheet">     -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light " style="background: -webkit-linear-gradient(0deg, #352c73 0, #3d2ca5 25%, #3d2ca5);    background: -moz-linear-gradient(0deg, #352c73 0, #3d2ca5 25%, #3d2ca5);    background: -o-linear-gradient(0deg, #352c73 0, #3d2ca5 25%, #3d2ca5);    background: -ms-linear-gradient(0deg, #352c73 0, #3d2ca5 25%, #3d2ca5);    background: linear-gradient(90deg, #352c73 0, #3d2ca5 25%, #3d2ca5);    -webkit-box-shadow: 0 2px 4px 0 rgba(0,0,0,0.25);    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.25);padding: 0px 50px;">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://shape-e.com/svg/bo330-w53wt.webp" width="130px" alt="logo" >
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links --> 
                        @guest
                            <li class="d-menu nav-item">
                                <a class="nav-link" href="/blog">{{ __('Blog') }}</a>
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                            </li>
                        @if (Route::has('register'))
                                
                            @endif
                        @else
                                @if(Auth::user()->rango = "practicante")
                                <a id="navbarDropdown" class="nav-link" href="/cursosinterno" >
                                    Mis cursos
                                </a>
                                @else
                                <a id="navbarDropdown" class="nav-link" href="/home" >
                                    Mis cursos
                                </a>
                                <a id="navbarDropdown" class="nav-link" href="#" >
                                    Todos los Cursos
                                </a>
                                @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
