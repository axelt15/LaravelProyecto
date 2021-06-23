<?php

require 'cn.php';

 $Masa=$_POST['Masa'];
 $Tamano=$_POST['Tamano'];
 $Cantidad=$_POST['Cantidad'];
 $MitadI=$_POST['MitadI'];
 $MitadD=$_POST['MitadD'];
 $Adicionales=$_POST['Adicionales'];

 


$query = "INSERT INTO pedido (Masa,Tamano,Cantidad, MitadI,MitadD,Adicionales) VALUES ('$Masa','$Tamano','$Cantidad','$MitadI','$MitadD','$Adicionales')";
$result = $conexion->query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Orden</title>
  <link rel="stylesheet"  href="#">
</head>
<body>
	<header>
    <nav>
      <section class="contenedor nav">
        <div class="logo">
          <a href="#"><img src="#"></a>
        </div>
       <div class="enlaces-header">
          <a href="#">Inicio</a>
          <a href="#">Menú</a>
          <a href="#">Promociones</a>
          <a href="#">Adicionales</a>
        </div>
      </section>
    </nav>
  </header>
	<center><h1>Orden</h1><h1></center>
                    <br>
	<center><h2>¡Excelente! Su pedido fue exitoso.</h2></center>
  <br>
  <center><img src="#" height="300"></center>
  <br>
</body>