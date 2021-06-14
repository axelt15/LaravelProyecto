@extends('layout')


@section('title')
Inicio se sesión | Rapidisimo
@endsection


@section('conte')
<link rel="stylesheet" href="{{ asset('CSS/estilos.css') }}">
<link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('CSS/sweetalert2.min.css') }}">

    <div class="container-login">
        <div class="wrap-login">
            <form class="login-form validate-form" id="form" action="user" method="POST">
                <span class="login-form-title">LOGIN</span>
    @csrf
        <label for="mail"></label>
        <div class="wrap-input100" data-validate = "Usuario incorrecto">
    <input  class="input100" type="text" id="mail" autofocus required placeholder="Ingresa tu correo" name="mail">
    <span class="focus-efecto"></span>  </div>

    <div class="wrap-input100" data-validate="Password incorrecto">
    <label for="pass"></label>
    <input class="input100" type="password" id="pass" placeholder="Ingresa tu contraseña" required name="pass">
    <span class="focus-efecto"></span>
                </div>

                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
    <button type="submit" class="login-form-btn" value="Log In"> Ingresar </button>
    </form>
    <p class="warnings" id="warnings"></p>
    </div>
                </div>
            </form>
        </div>
    </div>     
    
        
    


    

    <script type="text/javascript" src="{{ asset('JS/login.js') }}">
        
    </script>
    
    @endsection