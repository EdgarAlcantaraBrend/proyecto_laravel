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
    <div class="container-fluid:100%">
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
                                <div><td>Atl</td></div>
                                <div><td>Agua</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_a/alt.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/agua.png')}}" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>Amatl</td></div>
                                <div><td>Papel</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_a/amatl.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/papel.png')}}" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>Apan</td></div>
                                <div><td>Sobre el agua</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_a/apan.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/sobre_el_agua.jpg')}}" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:65px"></td></div>
                            </tr>
                            <tr>
                                <div><td>Akosamalutl</td></div>
                                <div><td>Arcoiris</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_a/akosamalutl.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/arco.png')}}" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>Atoyatl</td></div>
                                <div><td>Lago</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_a/lago.opus')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/lago.png')}}" class="image-responsive imagen" title="Alfabeto A "  style="width: 75px;height:75px"></td></div>
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