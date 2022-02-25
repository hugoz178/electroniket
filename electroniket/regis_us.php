<?php

include 'conex.php';



$us = $_POST['usuario'];

$mail = $_POST['correo'];

$psw = $_POST['contrasena'];

$message = '<!DOCTYPE html>

<html>

<body>

	<div>

	<h1 class="text-danger">Bienvenido a Electroniket!!</h1>

	<p>Gracias por registrarte a nuestra tienda<b> Electroniknet</b> </p>
	<br>
	
	<h1><a href="https://www.nfparty.com/nfparty.com/diegomendozaromero/project/electroniket/ingresa.php">Inicia sesión</a></h1>
	

<p>Copyright &copy; 2019 &middot; Todos los derechos reservados</p>

</body>

</html>';



$cabeceras = 'MIME-Version: 1.0' . "\r\n";

$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";



$registrar = "INSERT INTO usuarios (user,mail,psw)

VALUES ('$us','$mail','$psw');";







mail($mail,"Registro con exito. Bienvenido a Electroniknet!",$message,$cabeceras);





$listo = mysqli_query($conexion,$registrar);

if ($listo) {

	header("Location:registro.php?correcto=1");


}else{

	header("Location:registro.php?error=1");


}





?>