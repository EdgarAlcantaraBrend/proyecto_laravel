@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container-fluid" style="background-color: aqua" >
    <div class="row">
        <div class="col">
            <p class="text-left">
                @foreach ($User as $User) 
                <p class="h3" style="font-family: 'Edu NSW ACT Foundation', cursive;">¡¡ Bienvenido {{$User->name}}  {{$User->paterno}} {{$User->materno}} a Cybernahualt un mundo
                    lleno de aprendizaje ancestral !!</p>
                @endforeach
            </p>
        </div>
    </div>
</div>
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
                    <a href="{{ route('tablaCursos') }}"><button type="button" class="btn btn-outline-success btn-block" href="curso_1.php">Ir a curso</button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card max-w-sm rounded overflow-hidden shadow-lg" style="width: 14rem;" >
                <img class="card-img-top" src="{{asset('img/presentacionNahualt.jpg')}}" height="220" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-family: 'Cormorant SC', serif;">¿Ak nehwatl? (presentacion en Nahualt)</h5>
                    <p class="card-text"  style="text-align:justify">La forma de presentacion mediante el lenguaje Nahualt</p>
                    <a href="{{ route('tablaCursos') }}"><button type="button" class="btn btn-outline-primary btn-block" href="curso_1.php">Ir a cursos 
                    </button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card max-w-sm rounded overflow-hidden shadow-lg" style="width: 14rem;">
                <img class="card-img-top" src="{{asset('img/numerosNahualt.jpg')}}" height="220" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-family: 'Cormorant SC', serif;">Numeros en Nahualt</h5>
                    <p class="card-text"  style="text-align:justify">Consiste en los numeros en nahualt en la cual contiene los numeros basicos
                    de aprender en nahualt</p>
                    <a href="{{ route('tablaCursos') }}"><button type="button"  class="btn btn-outline-danger btn-block" href="curso_1.php" >Ir a curso</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fuid mt-2">
    <div class="row">
      <div class="col">
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
@include('flotantes.redesSociales') 
@endsection
