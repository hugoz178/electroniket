<?php 

ob_start();
include 'conex.php';
session_start();
$mpdc = $_SESSION['s_correo'];
$id=$_GET['id'];
$elim=("DELETE FROM productos WHERE id_pro = '$id'");

$resultado=mysqli_query($conexion,$elim);

if (!$resultado) {
	echo "<center><h1 clase='bg-dark'>No se borro con exito</h1></center>";
}else{
		header("location:productos.php");
}
?>