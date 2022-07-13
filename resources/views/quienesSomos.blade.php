@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card-columns">
                <div class="card">
                    <img  src="{{asset('img/mision.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Cormorant Garamond', serif;">Mision</h5>
                    <p class="card-text" style="font-family: 'Questrial', sans-serif;">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <img  src="{{asset('img/vision.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Cormorant Garamond', serif;">Vision</h5>
                    <p class="card-text" style="font-family: 'Questrial', sans-serif;">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
                <div class="card p-3">
                    <blockquote class="blockquote mb-0 card-body">
                    <p style="font-family: 'Questrial', sans-serif;">Los pueblos indígenas de México son los que asumen una identidad étnica 
                        con base en su cultura, sus instituciones y una historia que los define</p>
                    <footer class="blockquote-footer">
                    </footer>
                    </blockquote>
                </div>
                <div class="card bg-primary text-white text-center p-3">
                    <blockquote class="blockquote mb-0" style="font-family: 'Raleway', sans-serif;">
                    <p>CyberNahualt</p>
                    <footer class="blockquote-footer text-white">
                        <small>
                         <cite title="Source Title" style="font-family: 'Questrial', sans-serif;">Un grupo de hablantes
                            del Idioma Nahualt 
                         </cite>
                        </small>
                    </footer>
                    </blockquote>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Cormorant Garamond', serif;">Colaboraciòn</h5>
                    <p class="card-text" style="font-family: 'Questrial', sans-serif;">Jefatura de Unidad Departamental de Atención a Pueblos Originarios, Náhuatl y Lenguaje de Señas.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img  src="{{asset('img/logo.jpg')}}" class="card-img-top" width="300px" height="250" alt="...">
                </div>
                <div class="card p-3 text-right">
                    <blockquote class="blockquote mb-0">
                    <p style="font-family: 'Questrial', sans-serif;">El logo es una representacion de los hablantes Originarios de Santa Ana Tlacotenco</p>
                    </blockquote>
                </div>
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Cormorant Garamond', serif;">Variente Santa Ana Tlacotenco, Milpa Alta</h5>
                    <p class="card-text" style="font-family: 'Questrial', sans-serif;">
                    La cual influye en la identidad de sus habitantes, quienes poco a poco empiezan 
                    a recuperar su legado momoxca y el habla del náhuatl.
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('flotantes.redesSociales') 

@endsection