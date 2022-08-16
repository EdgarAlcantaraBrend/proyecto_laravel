@extends('layouts.app')

@section('content')
<br><br><br><br><br>
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="{{asset('img/logo.jpg')}}"  href="curso.php" style="width: 200px;height:180px"/>
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
                                <strong>{{ ('Correo no registrado') }}</strong>
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

               

                <div class="row ">
                    <div class="col-md-12 ">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Enviar') }}
                        </button>
                    </div>
                </div>
                <br>
                
            </form>    
        </div>
        <div id="formFooter">
            <a class="nav-link" href="{{ route('welcome') }}"><button class="btn btn-danger" type="submit">Cancelar</button></a>
        </div>
    </div>
</div>

@endsection
