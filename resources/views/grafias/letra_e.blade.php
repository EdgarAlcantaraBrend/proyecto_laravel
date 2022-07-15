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
                                <div><td>Elutl</td></div>
                                <div><td>Elote</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_e/elutl.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/elote2.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 95px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>Ehkahtsolle</td></div>
                                <div><td>Nariz</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_e/ehkahtsolle.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/nariz3.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>Elle</td></div>
                                <div><td>Esternòn</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_e/elle.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/esternon.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:65px"></td></div>
                            </tr>
                            <tr>
                                <div><td>Ewatl</td></div>
                                <div><td>Cascara de frut</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_e/ewatl.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/cascara_fruta2.png')}}" class="image-responsive imagen" title="Letra_ch"  style="width: 95px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>Ehkatepetl</td></div>
                                <div><td>Cerro del viento</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_e/ehkatepetl.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/cerroDelViento.jpg')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:75px"></td></div>
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