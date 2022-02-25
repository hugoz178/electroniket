<?php

include 'conex.php';
session_start();
ob_start();
$mail=$_SESSION['s_correo'];

$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));


$actualiza="UPDATE fotop SET foto = '$foto', mail = '$mail' WHERE mail = '$mail';";


$resul= mysqli_query($conexion,$actualiza);

if ($resul) {
	header("location:perfil.php");
}
else{
	header("location:act_foto.php?error=1");
}

?>