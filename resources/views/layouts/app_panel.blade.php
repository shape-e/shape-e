<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/ico.png') }}" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/clean-blog.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Shape-e') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/movimineto.js') }}" charset="utf-8" defer></script>
    <script src="{{ asset('js/app.js') }}" charset="utf-8" defer></script>

    <script type='text/javascript' src='https://code.jquery.com/jquery-1.7.2.min.js'> defer</script>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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

     <script src="{{asset('js/tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light " style="   -webkit-box-shadow: 0 2px 4px 0 rgba(0,0,0,0.25);    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.25)">

                <div class="logo">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="https://shape-e.com/svg/bo330-w53wt.webp" width="130px" alt="logo" >
                    </a>
                    <div class="before" style="   -webkit-box-shadow: 0 2px 4px 0 rgba(0,0,0,0.25);    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.25)"></div>
                </div>
                <button class="navbar-toggler text-primary " style="    background-color: #532CD3 !important;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    
                    <span class="text-light" ><i class="fas fa-bars fa-1x"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links --> 
                        @guest
                            <li class="d-flex nav-item">
                                <a class="nav-link" href="/blog">{{ __('Blog') }}</a>
                                <a class="nav-link"  style="display:none;" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>

                            </li>
                            @if (Route::has('register'))
                                
                            @endif
                        @else
                               
                            <li class="nav-item dropdown">
                                
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #000; margin-top: 4rem" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a id="navbarDropdown" class="dropdown-item" href="/home" >
                                        Mis cursos
                                    </a>
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

                            <li class="display-block">
                                <ul class="navbar-nav  sidebar sidebar-dark accordion degraded-left"  id="accordionSidebar">

                                    <!-- Nav Item - Dashboard -->
                                    <li class="nav-item active ptop-5">
                                        <a class="nav-link" href="/panel">
                                            <i class="fas fa-home"></i>
                                            <span>Inicio</span>
                                        </a>
                                    </li>


                                    <!-- Nav Item - Pages Collapse Menu -->
                                    <li class="nav-item">
                                        <a class="nav-link black" href="/page" >
                                            <i class="fas fa-fw fa-folder"></i>
                                            <span>Post</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link black" href="/panel/cursos" >
                                            <i class="fas fa-fw fa-folder "></i>
                                            <span>Cursos</span>
                                        </a>
                                    </li>

                                </ul>

                            </li>
                    </ul>
                </div>
            
        </nav>
        <!-- Page Wrapper -->
  <div id="wrapper">

<!-- Sidebar -->
<ul class=" navbar-nav  sidebar sidebar-dark accordion pt-5 degraded-left"  id="accordionSidebar">

    <div class="display">
         <!-- Nav Item - Dashboard -->
        <li class="nav-item active ptop-5">
            <a class="nav-link flex" href="/panel">
            <i class="fas fa-home"></i>
            <span>Inicio</span></a>
        </li>

        <!-- Divider -->

        <!-- Heading -->


        <!-- Nav Item - Pages Collapse Menu -->


        <!-- Nav Item - Utilities Collapse Menu -->
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading s">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link flex" href="/page" >
            <i class="fas fa-fw fa-folder"></i>
            <span>Post</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link flex" href="/panel/cursos" >
            <i class="fas fa-fw fa-folder "></i>
            <span>Cursos</span>
            </a>
        </li>

        <!-- Nav Item - Charts -->
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

    
    </div>

</ul>
<!-- End of Sidebar -->

        <main style="width: 100%;">
            @yield('content')
        </main>
    </div>
    

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script> 
</body>
</html>
