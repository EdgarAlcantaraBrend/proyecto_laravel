@extends('layouts.app')

@section('content')
        <br>
        <br>
        <br>
        <br>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-3">
                    <a class="nav-link" href="{{ route('tablaCursos')}}"><button class="btn btn-primary btn-block" type="submit">Lista de clases</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h1>GRAFÍAS</h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col text-center">
                    <h4>Significado: Signo gráfico o conjunto de ellos con que se representa un sonido o una palabra en la escritura.</h4>
                </div>
            </div>
        </div>
        <br>
        <div class="letras-recomendadas contenedor">
            <div class="contenedor-titulo-controles">
                <br>
                <h1></h1>
                <div class="indicadores"></div>
            </div>
            <div class="contenedor-principal">
                <button role="button" id="flecha-izquierda" class="flecha-izquierda"> <i class="fas fa-angle-left"></i></button>

                <div class="contenedor-carousel ">
                    <div class="carousel carousel-responsive">
                        <div class="letra">
                            <a href="{{ route('grafias.letra_a')}}" style="margin-left: 15px"><img src="{{asset('img/letra_a.png')}}" alt=""></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_ch')}}" style="margin-left: 20px"><img src="{{asset('img/letra_ch2.png')}}" alt="" style="margin-top: -20px;height: 270px;width: 400px;"></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_e')}}" style="margin-left: 25px"><img src="{{asset('img/letra_e.png')}}" alt="" style="width: 200px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_i')}}" style="margin-left: 20px"><img src="{{asset('img/letra_i.png')}}" alt="" style="width: 215px;height: 225px" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_h')}}" style="margin-left: 60px" ><img src="{{asset('img/letra_h.png')}}" alt="" style="width: 215px;height: 225px" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_k')}}" style="margin-left: 90px"><img src="{{asset('img/letra_k.png')}}" alt="" style="width: 215px;height: 225px"></a>
                                
                        </div>
                        <div class="letra" style="margin-top: -35px;right:40px">
                            <a href="{{ route('grafias.letra_kw')}}"style="margin-left: 55px"><img src="{{asset('img/letra_kw.png')}}" alt="" style="width: 370px;height: 290px;"></a>
                                
                        </div>
                        <div class="letra" style="margin-top: -4px">
                            <a href="{{ route('grafias.letra_l')}}"style="margin-left: 48px"><img src="{{asset('img/letra_l.png')}}" alt="" style="width: 200px;height: 220px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_m')}}"style="margin-left: 52px"><img src="{{asset('img/letra_m.png')}}" alt="" style="width: 205px;height: 225px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_n')}}"style="margin-left: 35px"><img src="{{asset('img/letra_n.png')}}" alt="" style="width: 205px;height: 220px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_o')}}"style="margin-left: 45px"><img src="{{asset('img/letra_o.png')}}" alt=""  style="width: 220px;height: 220px;"></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_p')}}"style="margin-left: 45px"><img src="{{asset('img/letra_p.png')}}" alt="" style="width: 180px;height: 220px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_s')}}" style="margin-left: 40px"><img src="{{asset('img/letra_s.png')}}" alt=""style="width: 205px;height: 230px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_t')}}"><img src="{{asset('img/letra_t.png')}}" alt="" style="width: 205px;height: 220px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_tl')}}" style="margin-left: 30px"><img src="{{asset('img/letra_tl.png')}}" alt="" style="width: 330px;height: 220px;" ></a>
                                
                        </div>
                        <div class="letra" style="margin-top: -4px;">
                            <a href="{{ route('grafias.letra_ts')}}"style="margin-left: 30px"><img src="{{asset('img/letra_ts.png')}}" alt="" style="width: 320px;height: 230px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_w')}}"style="margin-left: 30px"><img src="{{asset('img/letra_w.png')}}" alt="" style="width: 230px;height: 220px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_x')}}"style="margin-left: 80px"><img src="{{asset('img/letra_x.png')}}" alt="" style="width: 200px;height: 220px;" ></a>
                                
                        </div>
                        <div class="letra">
                            <a href="{{ route('grafias.letra_y')}}"style="margin-left: 80px"><img src="{{asset('img/letra_y.png')}}" alt="" style="width: 200px;height: 220px;;" ></a>
                                
                        </div>
                        
                    </div>
                </div>
                <button role="button" id="flecha-derecha" class="flecha-derecha"> <i class="fas fa-angle-right"></i></button>
            </div>
            <p>¡Has click sobre una letra!</p>
        </div>
        @include('flotantes.redesSociales') 


        <script type="text/javascript">

            const fila = document.querySelector('.contenedor-carousel');
            const letras = document.querySelectorAll('.letra');
        
            const flechaIzquierda = document.getElementById('flecha-izquierda');
            const flechaDerecha = document.getElementById('flecha-derecha');
        
        
            flechaDerecha.addEventListener('click', ()=> {
                fila.scrollLeft += fila.offsetWidth;
        
                const indicadorActivo = document.querySelector('.indicadores .activo');
                if (indicadorActivo.nextSibling) {
                    indicadorActivo.nextSibling.classList.add('activo');
                    indicadorActivo.classList.remove('activo');
                }
            });
        
            flechaIzquierda.addEventListener('click', ()=> {
                fila.scrollLeft -= fila.offsetWidth;
        
                const indicadorActivo = document.querySelector('.indicadores .activo');
                if (indicadorActivo.previousSibling) {
                    indicadorActivo.previousSibling.classList.add('activo');
                    indicadorActivo.classList.remove('activo');
                }
            });
        
        
            const numeroPaginas = Math.ceil(letras.length / 3.5);
        
            for(let i = 0;i < numeroPaginas;i++){
                const indicador  = document.createElement('button');
                if (i === 0) {
                    indicador.classList.add('activo');
                }
        
                document.querySelector('.indicadores').appendChild(indicador);
                indicador.addEventListener('click', (e) => {
                    fila.scrollLeft = i * fila.offsetWidth;
        
                    document.querySelector('.indicadores .activo' ).classList.remove('activo');
                    e.target.classList.add('activo');
                })
            }
            
            /* Segundo carrusel*/
            
            

        </script>

@endsection


