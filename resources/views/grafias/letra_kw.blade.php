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
                                <div><td>kwawitl</td></div>
                                <div><td>Arbol</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_kw/kwawitl.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/arbol2.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 95px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>kwaktlan</td></div>
                                <div><td>bosque</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_kw/kwaktlan.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/bosque2.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>awokwawitl</td></div>
                                <div><td>Arbol de enero<</td></div>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/arbol_enero2.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:65px"></td></div>
                            </tr>
                            <tr>
                                <div><td>kwalle</td></div>
                                <div><td>Bien</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_kw/kwalle.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/bien2.png')}}" class="image-responsive imagen" title="Letra_ch"  style="width: 95px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>kwascuchtle</td></div>
                                <div><td>Lindero</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_kw/kwascuchtle.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/lindero2.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:75px"></td></div>
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