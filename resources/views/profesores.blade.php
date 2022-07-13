@extends('layouts.app')
@section('content')
<br><br>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="text-center" style="font-family: 'Montserrat', sans-serif;"><h3>Profesores</h3></div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="text-center" style="font-family: 'Cormorant Garamond', serif;"><h2>Los profesores son hablantes de
                la lengua nahuatl en la cual imparten los cursos que conforman en esta plataforma.
            </h2></div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{asset('img/profesores.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text-center" style="font-family: 'Tangerine', cursive;">
                            <h1>José Ortiz Rivera
                            </h1></div>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="text-center"  style="font-family: 'Cormorant Garamond', serif;">
                                            <h2><strong>Biografia</strong>
                                            </h2></div>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        José Ortiz Rivera es un revitalizador de la lengua náhuatl desde el arte y la cultura, es originario de Santa Ana Tlacotenco, Milpa Alta y ahí, en su comunidad, ha impulsado que siga viva la lengua nahuatl, por medio del canto, la pintura y la escultura. 
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="text-center" style="font-family: 'Cormorant Garamond', serif;">
                                                <h2><strong>Logros</strong>
                                            </h2></div>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <div class="text-center" style="font-family: 'Cormorant Garamond', serif;">
                                            <h2><strong>Contacto</strong>
                                            </h2></div>
                                        </button>
                                    </h2>
                                </div>
                                    <div div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Pueblo de Santa Ana Tlacotenco, ubicada en Guadalupe y Ramírez 69, Santa Ana Tlacontenco, Milpa Alta
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{asset('img/profesores.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="text-center" style="font-family: 'Tangerine', cursive;"><h1>Oswaldo Galicia Calderón
                        </h1></div>
                        <div class="accordion" id="accordionExample1">
                            <div class="card">
                                <div class="card-header" id="headingfour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                            <div class="text-center" style="font-family: 'Cormorant Garamond', serif;">
                                            <h2><strong>Biografia</strong>
                                            </h2></div>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsefour" class="collapse show" aria-labelledby="headingfour" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            <div class="text-center" style="font-family: 'Cormorant Garamond', serif;">
                                                <h2><strong>Logros</strong>
                                            </h2></div>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingsix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                            <div class="text-center" style="font-family: 'Cormorant Garamond', serif;">
                                            <h2><strong>Contacto</strong>
                                            </h2></div>
                                        </button>
                                    </h2>
                                </div>
                                    <div div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample1">
                                        <div class="card-body">
                                         Pueblo de Santa Ana Tlacotenco, ubicada en Guadalupe y Ramírez 69, Santa Ana Tlacontenco, Milpa Alta
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('flotantes.redesSociales') 
@endsection