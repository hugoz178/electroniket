<?php 
ob_start();
include 'conex.php';
session_start();

$mail=$_SESSION['s_correo'];

$nombre = $_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$estado=$_POST['estado'];
$ciudad=$_POST['ciudad'];
$domicilio=$_POST['domicilio'];
$postal=$_POST['postal'];
$telefono=$_POST['telefono'];
$descripcion = $_POST['descripcion'];

//Variables para editar

$actualizare="UPDATE formulario SET nombre= '$nombre',paterno ='$paterno', materno='$materno', estado='$estado',ciudad='$ciudad',domicilio='$domicilio', postal='$postal', telefono='$telefono', descripcion='$descripcion' WHERE mail='$mail'";

//Aqui terminan las variables para editar


$resultadoe=mysqli_query($conexion,$actualizare);


if ($resultadoe) {
	header("location:perfil1.php");
	}else{
	header("location:form_up1.php?error=1");
	}

 ?>
 <a href="perfil1.php">Regresar</a>
