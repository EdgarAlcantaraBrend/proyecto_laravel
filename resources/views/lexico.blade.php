@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/lexico.css') }}">
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col">
            <p> <h1>Lexico en Nahualt</h1></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
        <section class="hero-section">
        <div class="card-grid">
            <a class="card" >
            <div class="card__background" style="background-image: url('{{asset('img/lexico/agua.jpg')}}')"></div>
            <div class="card__content">
                <p class="card__category"><h1 style="text-white">agua</h1></p>
                <h3 class="card__heading">alt</h3>
            </div>
            </a>
            <a class="card" >
                <div class="card__background" style="background-image: url('{{asset('img/lexico/libro.jpg')}}')"></div>
            <div class="card__content">
                <p class="card__category"><h1>Libro</h1></p>
                <h3 class="card__heading">amoxtli </h3>
            </div>
            </a>
            <a class="card" >
            <div class="card__background" style="background-image: url('{{asset('img/lexico/casa.jpg')}}')" ></div>
            <div class="card__content">
                <p class="card__category"><h1>Casa</h1></p>
                <h3 class="card__heading">kalle</h3>
            </div>
            </li>
            <a class="card" >
            <div class="card__background" style="background-image: url('{{asset('img/lexico/Frijoles.jpg')}}')"></div>
            <div class="card__content">
                <p class="card__category"><h1>Frijol</h1></p>
                <h3 class="card__heading">yetl</h3>
            </div>
            </a>
        <div>
        </section>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <section class="hero-section">
        <div class="card-grid">
            <a class="card" >
                <div class="card__background" style="background-image: url('{{asset('img/lexico/aguila.jpg')}}')"></div>
            <div class="card__content">
                <p class="card__category"><h1>Àguila</h1></p>
                <h3 class="card__heading">kwawtli</h3>
            </div>
            </a>
            <a class="card" >
            <div class="card__background" style="background-image: url('{{asset('img/lexico/arena.jpg')}}')"></div>
            <div class="card__content">
                <p class="card__category"><h1>Arena</h1></p>
                <h3 class="card__heading">xalle </h3>
            </div>
            </a>
            <a class="card" >
            <div class="card__background" style="background-image: url('{{asset('img/lexico/piedra.jpg')}}')"></div>
            <div class="card__content">
                <p class="card__category"><h1>Piedra</h1></p>
                <h3 class="card__heading">tetl </h3>
            </div>
            </li>
            <a class="card">
            <div class="card__background"  style="background-image: url('{{asset('img/lexico/camino.jpg')}}')" ></div>
            <div class="card__content">
                <p class="card__category"><h1>Camino</h1></p>
                <h3 class="card__heading">ohtle</h3>
            </div>
            </a>
        <div>
        </section>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <section class="hero-section">
        <div class="card-grid">
            <a class="card" >
                <div class="card__background" style="background-image: url('{{asset('img/lexico/torcer.jpg')}}')"></div>
            <div class="card__content">
                <p class="card__category"><h1>Torcer</h1></p>
                <h3 class="card__heading">malinalle </h3>
            </div>
            </a>
            <a class="card" >
            <div class="card__background" style="background-image: url('{{asset('img/lexico/flor.jpg')}}')"></div>
            <div class="card__content">
                <p class="card__category"><h1>Flor</h1></p>
                <h3 class="card__heading">xuchitl</h3>
            </div>
            </a>
            <a class="card" >
            <div class="card__background" style="background-image: url('{{asset('img/lexico/madre.jpg')}}')"></div>
            <div class="card__content">
                <p class="card__category"><h1>Madre</h1></p>
                <h3 class="card__heading">nantle  </h3>
            </div>
            </li>
            <a class="card">
            <div class="card__background"  style="background-image: url('{{asset('img/lexico/tierra.jpg')}}')" ></div>
            <div class="card__content">
                <p class="card__category"><h1>Tierra</h1></p>
                <h3 class="card__heading">tlalle </h3>
            </div>
            </a>
        <div>
        </section>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <section class="hero-section">
        <div class="card-grid">
            <a class="card" >
                <div class="card__background" style="background-image: url('{{asset('img/lexico/torcer.jpg')}}')"></div>
            <div class="card__content">
                <p class="card__category"><h1>Torcer</h1></p>
                <h3 class="card__heading">malinalle </h3>
            </div>
            </a>
            <a class="card" >
            <div class="card__background" style="background-image: url('{{asset('img/lexico/flor.jpg')}}')"></div>
            <div class="card__content">
                <p class="card__category"><h1>Flor</h1></p>
                <h3 class="card__heading">xuchitl</h3>
            </div>
            </a>
            <a class="card" >
            <div class="card__background" style="background-image: url('{{asset('img/lexico/madre.jpg')}}')"></div>
            <div class="card__content">
                <p class="card__category"><h1>Madre</h1></p>
                <h3 class="card__heading">nantle  </h3>
            </div>
            </li>
            <a class="card">
            <div class="card__background"  style="background-image: url('{{asset('img/lexico/tierra.jpg')}}')" ></div>
            <div class="card__content">
                <p class="card__category"><h1>Tierra</h1></p>
                <h3 class="card__heading">tlalle </h3>
            </div>
            </a>
        <div>
        </section>
        </div>
    </div>
</div>
        

@include('flotantes.redesSociales') 
    
  
@endsection