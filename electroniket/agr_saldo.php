<?php
ob_start();
include 'conex.php';
session_start();
$mail=$_SESSION['s_correo'];
$saldo=$_POST['saldo'];


$insertar=("INSERT into saldo (saldo,mail) values('$saldo','$mail')");
$resultado=mysqli_query($conexion,$insertar);

if ($resultado) {
  header("Location:saldo.php?correcto=1");
}else
{
	header("Location:ag_saldo.php?error=1");
}
?>