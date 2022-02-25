<?php
ob_start();
include 'conex.php';
session_start();
$mail=$_SESSION['s_correo'];


$nom=$_REQUEST["txtnom"];
$cat=$_REQUEST["categoria"];
$can=$_REQUEST["cantidad"];
$cos=$_REQUEST["costo"];
$des=$_REQUEST["des"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="fotos/".$foto;
copy($ruta,$destino);
$insertar=("INSERT into productos (nombre,foto,costo,descripcion,categoria,cantidad,mail) values('$nom','$destino','$cos','$des','$cat','$can','$mail')");
$resultado=mysqli_query($conexion,$insertar);

if (!$resultado) {
  echo "<br><br>Error al registrar,intenta de nuevo";
  
  echo "<br><a href='añadir.php'>Regresar</a>";
}else
{
	header("Location:productos.php");
}
?>
