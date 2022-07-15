@extends('layouts.app')

@section('content')
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            
            <div class="row">
                <div class="col">
                    <h1 class="display-5 text-center" style="font-family: 'Cormorant SC', serif;"><strong>GRAFIAS</strong></h1>
                </div>
            </div>
            
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-bordered text-center" id="t_clases"> 
                        <thead>
                            <tr>
                                <th>N. Clase</th>
                                <th>Nombre de la clase</th>
                                <th>Tomar clase</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Grafias Nahuatl</td>
                                <td><a href="{{ route('alfabeto') }}"><button type="submit" class="btn btn-success">Empezar clase</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @include('flotantes.redesSociales') 
    
    <script type="text/javascript">
    $(document).ready( function () {
        $('#t_clases').DataTable();});
    </script>
@endsection
