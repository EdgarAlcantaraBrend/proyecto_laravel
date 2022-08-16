@extends('layouts.app')

@section('content')
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row" style="margin-top: -8px">
                <div class="col text-center">
                    <h2 style="font-family: 'Ibarra Real Nova', serif;">Saludo por la tarde-noche (Impersonal).</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Opciones
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('tablaSaludo') }}">Regresar a lista de clases</a></li>
                            <li><a class="dropdown-item" href="{{ route('animaciones') }}">Animaciones</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="row" style="margin-top: -8px"><div class="col text-center"><h5>Saludo:1</h5></div></div>
            <br>
            <center><img src="{{asset('img/personas3.gif')}}" alt="" style="width:400px;height:230px;margin-top:-10px"></center>
        </div>
        

        <div class="container-fluid:100%">
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-5" style="font-family: 'Ibarra Real Nova', serif;">
                    <table class="table table-striped table-hover text-center" id="t_clases" style="text-align: center"> 
                        <thead>
                            <tr>
                                <th>Saludo</th>
                                <th>Significado</th>
                                <th>Pronunciación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>¿Ken tika?</td>
                                <td>¿Cómo estás?</td>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3">
                                </audio></td></div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col"></div>
                <div class="col-sm-5" style="font-family: 'Ibarra Real Nova', serif;">
                    <table class="table table-striped table-hover text-center" id="t_clases" style="text-align: center"> 
                        <thead>
                            <tr>
                                <th>Contestación 1</th>
                                <th>Significado</th>
                                <th>Pronunciación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kwalle</td>
                                <td>Bien</td>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3">
                                </audio></td></div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <div class="container-fluid:100%">
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-5" style="font-family: 'Ibarra Real Nova', serif;">
                    <table class="table table-striped table-hover text-center" id="t_clases" style="text-align: center"> 
                        <thead>
                            <tr>
                                <th>Saludo</th>
                                <th>Significado</th>
                                <th>Pronunciación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>¿Ken tika?</td>
                                <td>¿Cómo estás?</td>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3">
                                </audio></td></div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col"></div>
                <div class="col-sm-5" style="font-family: 'Ibarra Real Nova', serif;">
                    <table class="table table-striped table-hover text-center" id="t_clases" style="text-align: center"> 
                        <thead>
                            <tr>
                                <th>Contestación 2</th>
                                <th>Significado</th>
                                <th>Pronunciación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ammo kwalle </td>
                                <td>No bien</td>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3">
                                </audio></td></div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col"></div>
            </div>
            <br>
            <div class="row"><div class="col text-center"><h5>Saludo:2</h5></div></div>
            <br>
            <center><img src="{{asset('img/personas3.gif')}}" alt="" style="width:400px;height:230px;margin-top:-10px"></center>
        </div>
        <div class="container-fluid:100%">
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-5" style="font-family: 'Ibarra Real Nova', serif;">
                    <table class="table table-striped table-hover text-center" id="t_clases" style="text-align: center"> 
                        <thead>
                            <tr>
                                <th>Saludo</th>
                                <th>Significado</th>
                                <th>Pronunciación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>¿Ken osemilhwitiwak? </td>
                                <td>¿Cómo se pasó el día? ¡Buena tarde!</td>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3">
                                </audio></td></div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col"></div>
                <div class="col-sm-5" style="font-family: 'Ibarra Real Nova', serif;">
                    <table class="table table-striped table-hover text-center" id="t_clases" style="text-align: center"> 
                        <thead>
                            <tr>
                                <th>Contestación 1</th>
                                <th>Significado</th>
                                <th>Pronunciación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kwalle</td>
                                <td>Bien</td>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3">
                                </audio></td></div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col"></div>
            </div>
            
        </div>
        <div class="container-fluid:100%">
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-5" style="font-family: 'Ibarra Real Nova', serif;">
                    <table class="table table-striped table-hover text-center" id="t_clases" style="text-align: center"> 
                        <thead>
                            <tr>
                                <th>Saludo</th>
                                <th>Significado</th>
                                <th>Pronunciación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>¿Ken osemilhwitiwak? </td>
                                <td>¿Cómo se pasó el día? ¡Buena tarde!</td>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3">
                                </audio></td></div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col"></div>
                <div class="col-sm-5" style="font-family: 'Ibarra Real Nova', serif;">
                    <table class="table table-striped table-hover text-center" id="t_clases" style="text-align: center"> 
                        <thead>
                            <tr>
                                <th>Contestación 2</th>
                                <th>Significado</th>
                                <th>Pronunciación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ammo kwalle </td>
                                <td>No bien</td>
                                <div><td><audio controls>
                                <source src="" type="audio/mp3">
                                </audio></td></div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col"></div>
            </div>
            <br>
        </div>
        @include('flotantes.redesSociales') 
    
   
@endsection
