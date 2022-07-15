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
                                <div><td>yehyekatl</td></div>
                                <div><td>Viento</td></div>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/viento.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 95px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>yetl</td></div>
                                <div><td>Frijol</td></div>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/frijol2.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:75px"></td></div>
                            </tr>
                            <tr>
                                <div><td>yullotl</td></div>
                                <div><td>Corazon</td></div>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/corazon.png')}}" class="image-responsive imagen" title=Letra_ch "  style="width: 85px;height:65px"></td></div>
                            </tr>
                            <tr>
                                <div><td>yehwatl</td></div>
                                <div><td>El / Ella</td></div>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3">
                                </audio></td></div>
                                <div><td><img src="{{asset('img/el_ella.png')}}" class="image-responsive imagen" title="Letra_ch"  style="width: 95px;height:75px"></td></div>
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