<?php
ob_start();
include 'conex.php';
session_start();

$mail=$_SESSION['s_correo'];

$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));


$insert="INSERT INTO fotop (foto,mail)
VALUES ('$foto','$mail');";


$resultado= mysqli_query($conexion,$insert);

if ($resultado) {
	header("location:perfil.php");
}
else{
	header("Location:regis_foto.php?error=1");

}

?>
<a href="perfil.php">Regresa</a>