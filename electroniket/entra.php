<?php
session_start();
include 'conex.php'; 
$mail=$_POST['correo'];
$psw=$_POST['contrasena'];

$proceso=$conexion->query("SELECT * FROM usuarios WHERE mail='$mail'");

if($f2=mysqli_fetch_array($proceso)){
	if($psw==$f2['pswa']){
	ob_start();
	$_SESSION['s_correo']=$mail;
	header("location:welcome.php");	
	}else{
		if($psw==$f2['psw']){
	ob_start();
	$_SESSION['s_correo']=$mail;
	header("location:welcome2.php");	
	}else{
	header("location:ingresa.php");
}
	}
}else{
	header("location:ingresa.php");
}

?>