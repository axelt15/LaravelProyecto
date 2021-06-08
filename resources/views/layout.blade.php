<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="imagen.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="/img/logo.svg" type="image/svg" />

<link  rel="icon"   href="imagenes/favicon.png" type="image/png" />
    <link rel="stylesheet" href="{{ asset('CSS/login.css') }}">
    <title> @yield('title', 'Rapidisimo') </title>
</head>
<body>
    
    <header>
    <a href="/"><button>Home</button></a>
    <a href="about"><button>About us</button></a>
    @yield('opcabe')
    </header>

    @yield('conte')
    

    <footer>
    <a href="">Acerca de nosotros :'B</a><br>
    <h4>Todos los derechos resevados © </h4>

    </footer>
</body>
</html>