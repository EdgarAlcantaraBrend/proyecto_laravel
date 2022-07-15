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
                            <div><td>Chille</td></div>
                            <div><td>Chile</td></div>
                            <div><td><audio controls>
                            <source src="{{asset('audios/letra_ch/chille.mp3')}}" type="audio/mp3">
                            </audio></td></div>
                            <div><td><img src="{{asset('img/chile2.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 95px;height:75px"></td></div>
                        </tr>
                        <tr>
                            <div><td>Chihchalle</td></div>
                            <div><td>saliva</td></div>
                            <div><td><audio controls>
                            <source src="{{asset('audios/letra_ch/chihchalle.mp3')}}" type="audio/mp3">
                            </audio></td></div>
                            <div><td><img src="{{asset('img/saliva2.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:75px"></td></div>
                        </tr>
                        <tr>
                            <div><td>Chiche</td></div>
                            <div><td>Perro</td></div>
                            <div><td><audio controls>
                            <source src="{{asset('audios/letra_ch/chiche.mp3')}}" type="audio/mp3">
                            </audio></td></div>
                            <div><td><img src="{{asset('img/perro.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:65px"></td></div>
                        </tr>
                        <tr>
                            <div><td>Chichiwalle</td></div>
                            <div><td>Seno</td></div>
                            <div><td><audio controls>
                            <source src="{{asset('audios/letra_ch/chichiwalle.mp3')}}" type="audio/mp3">
                            </audio></td></div>
                            <div><td><img src="{{asset('img/senos.jpg')}}" class="image-responsive imagen" title="Letra_ch"  style="width: 95px;height:75px"></td></div>
                        </tr>
                        <tr>
                            <div><td>Chilatulle</td></div>
                            <div><td>Atole de elote con chile</td></div>
                            <div><td><audio controls>
                            <source src="{{asset('audios/letra_ch/chilatulle.mp3')}}" type="audio/mp3">
                            </audio></td></div>
                            <div><td><img src="{{asset('img/chilatole2.jpg')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:75px"></td></div>
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