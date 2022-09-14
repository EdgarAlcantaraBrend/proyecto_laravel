<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CyberNahualt</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="./librerias/jquery-3.6.0.min.js"></script>
    <script src="./librerias/bostrap4/popper.min.js"></script>
    <script src="./librerias/bostrap4/bootstrap.min.js"></script>
    <script src="./librerias/sweetalert.min.js"></script>
    <script src="{{ asset ('dataTable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset ('dataTable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Josefin+Sans:wght@300&family=Montserrat:wght@500&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Tangerine:wght@700&family=Titillium+Web:ital,wght@1,200&display=swap" rel="stylesheet">   
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Josefin+Sans:wght@300&family=Montserrat:wght@500&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Tangerine:wght@700&family=Titillium+Web:ital,wght@1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Raleway:ital,wght@1,100;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Questrial&family=Raleway:ital,wght@1,100;1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Questrial&family=Raleway:ital,wght@1,100;1,300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/botonFlotante.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carrusel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/redesSociales.css') }}">
    <link rel="stylesheet" href="./librerias/bostrap4/bootstrap.min.css">
    <link rel="stylesheet" href="./librerias/fontawesome/css/all.css">
    <link rel="stylesheet" href="{{asset('dataTable/dataTables.bootstrap4.min.css') }}">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" >


   

    
</head>
<body style="overflow-x: hidden;">
    
    <div id="app">
        <div class="container fixed:100%"> 
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top fixed-top navbar-responsive">
                        
                        <div class="col-sm-3">
                            <img src="{{asset('img/logo_2_2.png')}}" width="60px"  alt="">
                            <a class="navbar-brand" href="index.php">
                                CyberNahualt
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <div class="col-sm-3"></div>
                            <div class="col mt-1">
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                @guest
                                    <div class="col">
                                        @if (Route::has('login'))
                                            <li class="nav-item active">
                                                <a class="nav-link"
                                                href="{{ route('login') }}">
                                                <span class="btn btn-primary" data-toggle="modal" href="{{ route('login') }}">
                                                    Ingresar
                                                </span>
                                                </a>
                                            </li>
                                        @endif
                                    </div>

                                    <div class="col">
                                        @if (Route::has('register'))
                                            <li class="nav-item active">
                                                <a class="nav-link" 
                                                href="{{ route('register')}}">
                                                    <span class="btn btn-warning" data-toggle="modal" href="{{ route('register') }}">
                                                        Registrar
                                                    </span>
                                                </a>
                                            </li>
                                        @endif
                                    </div>
                                @else
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home')}}"><span span class="fas fa-book" style="color:white"></span> Cursos</a>
                                    </li>  

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('quienesSomos')}}"><span class="fas fa-users" style="color:white"></span>¿Quienes somos?</a>
                                    </li>
                        
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('profesores')}}"><span class="fas fa-user-graduate" style="color:white"></span> Profesores</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('lexico')}}"><span class="fas fa-user-graduate" style="color:white"></span>Lexico</a>
                                    </li>
                                    
                                    <li class="nav-item active dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                           
                                            <img src="{{asset('img/icono.png')}}" width="30" height="30" alt="" loading="lazy">
                                            {{ Auth::user()->name}}
                                        </a>


                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                            <a class="dropdown-item" >
                                                Mi perfil
                                            </a>

                                            <a class="dropdown-item"  href="" >
                                                Mi Progeso
                                            </a>

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Salir de sesion') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    
                </nav>
            </div>
        </div>
    </div>
    @yield('content')
</body>
</html>
