@extends('layout')


@section('title')
Inicio se sesión | Rapidisimo
@endsection


@section('conte')
    <h1><center>Inicio de sesión</center></h1>

    <form action="user" method="POST" id="form">
    @csrf
        <label for="mail">Email</label>
    <p><input type="text" id="mail" autofocus required placeholder="Ingresa tu correo" name="mail"></p>

    <label for="pass">Password</label>
    <p><input type="password" id="pass" placeholder="Ingresa tu contraseña" required name="pass"></p>
    <input type="submit" value="Log In">
    </form>
    <p class="warnings" id="warnings"></p>


    

    <script type="text/javascript" src="{{ asset('JS/login.js') }}">
        
    </script>
    
    @endsection