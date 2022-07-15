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
                                <div><td>sakatl</td></div>
                                <div><td>Sacate</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_s/sakatl.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/sacate2.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 95px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>sowatl</td></div>
                                <div><td>Mujer</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_s/sowatl.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/mujer.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>sokitl</td></div>
                                <div><td>Lodo</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_s/sokitl.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/lodo.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:65px"></td></div>
                            </tr>
                            <tr>
                                <div><td>sehpan</td></div>
                                <div><td>Primera vez</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_s/sehpan.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/primera_vez.png')}}" class="image-responsive imagen" title="Letra_ch"  style="width: 95px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>sihtle</td></div>
                                <div><td>Abuela</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_s/sihtle.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/abuela.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>sente</td></div>
                                <div><td>Uno</td></div>
                                <div><td><audio controls>
                                <source src="{{asset('audios/letra_s/sente.mp3')}}" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/uno.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:75px"></td></div>
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