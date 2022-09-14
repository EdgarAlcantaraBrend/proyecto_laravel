@extends('layouts.app')

@section('content')
<br><br><br>
<link rel="stylesheet" href="{{ asset('css/cards.css') }}">
<div class="container-fluid" style="background-color: aqua" >
    <div class="row">
        <div class="col">
            <p> <h1>¡Ma san ika kwalle otrahsike {{ Auth::user()->name}} {{ Auth::user()->paterno}}!</h1></p>
        </div>
    </div>
</div>
<!----
<div class="container mt-4">
    <center><h1 class="display-4" style="font-family: 'Cormorant SC', serif;">CURSOS EN NAHUATL</h1></center>
</div>
<br>
<div class="container:100%" >
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col">
            <div class="card max-w-sm rounded overflow-hidden shadow-lg" style="width: 14rem;">
                <img class="card-img-top" src="{{asset('img/abecedario_b.jpg')}}" height="" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-family: 'Cormorant SC', serif;">Grafías de la lengua Náhuatl</h5>
                    <p class="card-text" style="text-align:justify">El alfabeto practico consiste en 19 grafías para 19 fonemas propios del náhuatl.</p>
                    <a href="{{ route('tablaCursos') }}"><button type="button" class="btn btn-outline-dark btn-block" href="curso_1.php">Ir a curso</button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card max-w-sm rounded overflow-hidden shadow-lg" style="width: 14rem;">
                <img class="card-img-top" src="{{asset('img/saludoNahualt.jpg')}}" height="220" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-family: 'Cormorant SC', serif;">tetlahpalulistle (Saludo)</h5>
                    <p class="card-text"  style="text-align:justify">Saludo por la tarde-noche (impersonal).</p><br><br>
                    <a href="{{ route('tablaSaludo') }}"><button type="button" class="btn btn-outline-success btn-block" href="curso_1.php">Ir a curso</button></a>
                </div>
            </div>rais nominal
        </div>
        <div class="col">
            <div class="card card max-w-sm rounded overflow-hidden shadow-lg" style="width: 14rem;" >
                <img class="card-img-top" src="{{asset('img/presentacionNahualt.jpg')}}" height="220" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-family: 'Cormorant SC', serif;">¿Ak nehwatl? (presentacion en Nahualt)</h5>
                    <p class="card-text"  style="text-align:justify">La forma de presentacion mediante el lenguaje Nahualt</p>
                    <a href="#"><button type="button" class="btn btn-outline-primary btn-block" href="#">Ir a cursos 
                    </button></a>
                </div>partes del cuerpo
            </div>
        </div>
        <div class="col">
            <div class="card card max-w-sm rounded overflow-hidden shadow-lg" style="width: 14rem;">
                <img class="card-img-top" src="{{asset('img/numerosNahualt.jpg')}}" height="220" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-family: 'Cormorant SC', serif;">Numeros en Nahualt</h5>
                    <p class="card-text"  style="text-align:justify">Consiste en los numeros en nahualt en la cual contiene los numeros basicos
                    de nahualt</p>
                    <a href="{{ route('numeros') }}"><button type="button"  class="btn btn-outline-danger btn-block" href="#" >Ir a curso</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<body>
    <div class="container mt-4">
    <center><h1 class="display-4" style="font-family: 'Cormorant SC', serif;">CURSOS EN NAHUATL</h1></center>
</div>
<br>
    <main class="main">
        
        <section class="card-area" style="margin-top: -250px">

            <!-- Card: Grafias -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--city">
                                    

                                <h4  style="text-align: center">
                                    Grafías de la lengua Náhuatl
                                </h4>
                                </div>
                                <br>
                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--city">
                                        Observar
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <img class="card-img-top" src="{{asset('img/abecedario_b.jpg')}}" height="100%" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--city" >
                                Abecedario Nahuatl
                            </h3>
                            <p class="inside-page__text">
                                El alfabeto practico consiste en 19 grafías para 19 fonemas propios del náhuatl.
                            </p>
                            <a href="{{ route('tablaCursos') }}" class="inside-page__btn inside-page__btn--city">Ir a curso</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Raiz nominal -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--ski">
                                    
                                    <h4 class="card-front__heading">
                                        Raiz Nominal
                                    </h4>
                                    
                                </div>
                                <br>
                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--ski">
                                        Observar
                                    </p>
                                </div>
                            </div>

                            <div class="card-back">
                                <img class="card-img-top" src="{{asset('img/raiz_nominal.GIF')}}" height="100%" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--ski">
                                Raiz Nominal
                            </h3>
                            <p class="inside-page__text">
                                Significado de Raiz Nominal
                            </p>
                            <a href="#" class="inside-page__btn inside-page__btn--ski">Ir a curso</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Cuerpo Humano -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--beach">
                                    
                                    <h4 class="card-front__heading">
                                        Cuerpo Humano
                                    </h4>
                                    
                                </div>
                                <br>
                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--beach">
                                        Observar
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <video class="video__container" autoplay muted loop>
                                    <source class="video__media" src="https://player.vimeo.com/external/332588783.sd.mp4?s=cab1817146dd72daa6346a1583cc1ec4d9e677c7&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--beach">
                                Cuerpo Humano
                            </h3>
                            <p class="inside-page__text">
                                Definicion 
                            </p>
                            <a href="#" class="inside-page__btn inside-page__btn--beach">Ir a curso</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Numeración -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--camping">
                        
                                    <h4 class="card-front__heading">
                                        Numeración
                                    </h4>
                                    
                                </div>
                                <br>
                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--camping">
                                        Observar
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <img class="card-img-top" src="{{asset('img/numeracion.GIF')}}" height="100%" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--camping">
                                Números en Nahuatl
                            </h3>
                            <p class="inside-page__text">
                                Información numeros
                            </p>
                            <a href="{{ route('numeros') }}" class="inside-page__btn inside-page__btn--camping">Ir a curso</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
</body>
</html>
<br>
<br>
<!---
<div class="container-fuid mt-2">
    
      <
      <div class="card text-white bg-dark text-center" >
          <div class="card-body">
            <h3 class="card-title" style="font-family: 'Questrial', sans-serif;">Aprender Nahualt te hara viajar al pasado</h3>
            <p class="card-text"><h4 style="font-family: 'Questrial', sans-serif;">CyberNahualt esta comprometido que tendras una experiencia inovidable.</h4></p>
          </div>
          <div class="card-footer text-muted">
            <p><h5 style="font-family: 'Questrial', sans-serif;">© Copyright 2022 CyberNahualt - Todos los Derechos Reservados</h5></p>
          </div>
        </div>
      </div>
    </div>
  </div>
-->
@include('flotantes.redesSociales') 
@endsection
