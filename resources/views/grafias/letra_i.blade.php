@extends('layouts.app')

@section('content')
    <br>
    <br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3">
                <a class="nav-link" href="{{ route('alfabeto')}}"><button class="btn btn-success " type="submit"><i class="fas fa-chevron-left"></i> Regresar</button></a>
            </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 style="font-family: 'Cormorant Garamond', serif;">
                    GRAFÍAS
                </h1>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="table-responsive">
                    <table class="table table-success table-striped text-center" id="t_clases" style="border-radius: 20px;"> 
                        <thead>
                            <tr>
                                <th scope="col text-center">Escritura</th>
                                <th scope="col text-center">Significado</th>
                                <th scope="col text-center">Pronunciación</th>
                                <th scope="col text-center">Imagen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <div><td>ilhwikat</td></div>
                                <div><td>Cielo</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_i/ilhwikatl.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/cielo2.jpg')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 95px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>ihtowa</td></div>
                                <div><td>Dice</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_i/ihtowa.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/dice.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>ichan</td></div>
                                <div><td>Su casa</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_i/ichan.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/su_casa.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:65px"></td></div>
                            </tr>
                            <tr>
                                <div><td>ichkatl</td></div>
                                <div><td>Lana (animo)</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_i/ichkatl.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/animo.png')}}" class="image-responsive imagen" title="Letra_ch"  style="width: 95px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>ilhwitl</td></div>
                                <div><td>Fiesta</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_i/ilhwitl.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/fiesta.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>ichpokatl</td></div>
                                <div><td>Muchacha</td></div>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3"  title="Falta audio ">
                                </audio></td></div>
                                <div><td><img src="./public/img/mu.png" class="image-responsive imagen" title="Alfabeto A "  style="width: 85px;height:75px"></td></div>
                            </tr>
                            </td>
                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection