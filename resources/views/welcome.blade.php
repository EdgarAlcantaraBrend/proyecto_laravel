@extends('layouts.app')
@section('content')
<br><br><br>
  <div class="container-fuid">
    <div class="row"> 
      <div class="col">
        <div class="card">
          <div class="card-body">
            <span style="font-family: 'Cormorant Garamond', serif;"><h1 class="text-center">En CyberNahualt encontraras cursos para toda la famila acerca 
              del idioma Nahualt
            </h1></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fuid">
    <div class="row">
      <div class="col">
        <div class="card bg-dark ">
          <img src="{{asset('img/fondo10.png')}}" class="card-img" alt="">
          <div class="card-img-overlay">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fuid mt-2">
    <div class="row">
      <div class="col ">
        <div class="card mb-3 border-light ">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="{{asset('img/aprender.gif')}}" class="card-img rounded" height="200px" width="200" alt="...">
              </div>
              <div class="col-md-8 ">
                <div class="card-body">
                  <h5 class="card-title text-center">La manera #1 de aprender el idioma Nahualt</h5><br>
                  <p class="card-text text-center text-justify" style="font-family: 'Raleway', sans-serif;"><strong>
                  ¡Aprender con CyberNahualt acerca del idioma Nahualt 
                  de la variante de Santa Tlacotenco Milpa Alta
                  es divertido y las investigaciones demuestran que funciona ! 
                  Con lecciones rápidas y breves, mientras 
                  adquiere habilidades de comunicación en el mundo real.
                  </strong></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid:100% mt-5">
    <div class="row">
      <div class="col">
        <center><h1 style="font-family: 'Teko', sans-serif;">Porqué te encantará aprender Nahualt</h1></center>
         <hr>
      </div>
    </div>
  </div>
  <div class="container-fluid:100%">
    <div class="card-deck">
      <div class="card">
        <img src="{{asset('img/foto4.png')}}" class="card-img-top" alt="..." height="180;">
        <div class="card-body">
          <p class="card-text"><h5 class="text-justify" style="font-family: 'Cormorant Garamond', serif;"><strong>
              En el náhuatl, en la lengua y en la cosmovisión, el ser humano no es el 
              centro, sino que es parte de un todo, como son los animales, las plantas, todos los seres vivos.
            Entonces cuando alguien aprende náhuatl, encuentra una oportunidad para resignificar su mundo y 
            su propia persona”</h5>
            </strong></p>
          <p class="card-text"><small class="text-muted">Sergio Sevilla</small></p>
        </div>
      </div>
      <div class="card">
        <img src="{{asset('img/foto.jpg')}}" class="card-img-top" alt="..." >
        <div class="card-body">
          <p class="card-text"><h5 class="text-justify" style="font-family: 'Cormorant Garamond', serif;"><strong>
              Preservar las lenguas es indispensable ya que actualmente, al menos el 43% 
              de las 6000 lenguas que se estima que se hablan en el mundo están en  peligro de extinción y se
              calcula  que cada dos semanas desaparece una lengua que se lleva consigo todo un patrimonio 
              cultural e intelectual.</h5>
              </strong></p>
          <p class="card-text"><small class="text-muted">ONU</small></p>
        </div>
      </div>
      <div class="card">
        <img src="{{asset('img/foto3.jpg')}}" class="card-img-top" alt="..." >
        <div class="card-body">
          <p class="card-text"><h5 class="text-justify" style="font-family: 'Cormorant Garamond', serif;"><strong>
                  Por el interes en aprender náhuatl porque cree que es muy importante que 
                  en México las personas puedan tener un acercamiento con las lenguas indígenas que dice, 
                  deben ser motivo de orgullo.</h5>
                  </strong></p>
          <p class="card-text"><small class="text-muted">Flor es estudiante de Letras Hispánicas</small></p>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="container-fuid mt-3">
    <div class="row">
      <div class="col">
        <div class="card mb-3 border-light">
          <div class="row no-gutters">
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title text-center">Aprende en cualquier momento y en cualquier lugar.</h5><br>
                <p class="card-text text-center text-justify" style="font-family: 'Raleway', sans-serif;">
                  <strong>Haga que sus descansos y viajes sean más productivos con nuestras aplicaciones para 
                    iPhone y Android.
                    Descárguelos y vea por qué Apple y Google nos dieron sus más altos elogios.</strong></p><br>

                    <div class="">
                      <a href="https://www.apple.com/app-store/" target="_blank"><img  class="rounded" src="{{asset('img/appStore.png')}}"  type="button"  width="300px" height="60px"></a>
                      <a href="https://play.google.com/store/games" target="_blank"><img  class="rounded"  src="{{asset('img/googleStore.png')}}" type="button" width="300px" height="150px"></a>
                      
                    </div>
              </div>
            </div>
            <div class="col-md-4">
              <img src="{{asset('img/movil.jpg')}}" class="card-img"  height="200px" width="200" alt="...">
            </div>
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
            <a href="registro.php" class="btn btn-primary">Registrate ahora!!!!</a>
          </div>
          <div class="card-footer text-muted">
            <p><h5 style="font-family: 'Questrial', sans-serif;">© Copyright 2022 CyberNahualt - Todos los Derechos Reservados</h5></p>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('flotantes.redesSociales') 
@include('flotantes.botonFlotante')  

@endsection
