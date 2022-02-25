<?php  
ob_start();
include 'conex.php';
session_start();

$mail = $_SESSION['s_correo'];

$nom = $_POST['nombre'];
$pat = $_POST['paterno'];
$mat = $_POST['mat'];
$est = $_POST['estado'];
$ciu = $_POST['ciudad'];
$dom = $_POST['domicilio'];
$pos = $_POST['postal'];
$tel = $_POST['telefono'];
$des = $_POST['descripcion'];

$inserta = "INSERT INTO formulario (mail,nombre,paterno,materno,estado,ciudad,domicilio,postal,telefono,descripcion)
VALUES ('$mail','$nom','$pat','$mat','$est','$ciu','$dom','$pos','$tel','$des');";

$res = mysqli_query($conexion,$inserta);

if ($res) {
	header("Location: perfil1.php");
}else{
	header("Location:form_datos_us1.php?error=1");
}


?>
