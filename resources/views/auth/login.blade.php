@extends('layouts.app')

@section('content')
<br><br>
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <p></p>
            <img src="{{asset('img/logo.jpg')}}"  href="curso.php" style="width: 180px;height:160px"/>
            <p></p>
            <h1 style="color: black">Bienvendo Al Mundo Nahuatl</h1>
        </div>
        
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    

                    <div class="col-md-12">
                        <input id="email" type="email" placeholder="Correo electronico" style="text-align: center" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ ('Correo o contraseña incorrecta') }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    

                    <div class="col-md-12">
                        <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="row ">
                    <div class="col-md-12 " >
                        <button type="submit" class="btn btn-primary" style="height: 45px;width:200px;">
                            {{ __('Iniciar sesión' ) }}
                        </button>
                    </div>
                </div>
                <br>
                
            </form>    
        </div>
        <div id="formFooter">
            <a class="nav-link" href="{{ route('welcome') }}"><button class="btn btn-danger" type="submit" style="height: 45px;width:200px;">Cancelar</button></a>
        </div>
    </div>
</div>
@endsection
