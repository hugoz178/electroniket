<?php
ob_start();
session_start();
include 'conex.php';

$mpdc = $_SESSION['s_correo'];

$codigo=$_REQUEST['id_pro'];

$cantidad=$_POST['can'];



$sql=("SELECT * from productos where id_pro='$codigo'");
        $result=mysqli_query($conexion,$sql);
        while($res=mysqli_fetch_array($result))
        {
        	$nombre=$res['nombre'];
        	$foto=$res['foto'];
        	$costo=$res['costo'];
        	$descripcion=$res['descripcion'];
        	$categoria=$res['categoria'];
                $id=$res['id_pro'];

        }

$sql1=("SELECT * from carrito where id='$codigo' ");
        $result1=mysqli_query($conexion,$sql1);
        while($res1=mysqli_fetch_array($result1))
        {
                $id1=$res1['id'];
                $costo1=$res1['costo'];
                $can1=$res1['cantidad'];

        }



$query = "SELECT count(*) as total from carrito where mpdc='$mpdc' ";
$result2=mysqli_query($conexion,$query);



if($contar=mysqli_fetch_assoc($result2)>=0){


if($id==$id1){

        
        $to=$costo*$cantidad;
        $su=$to+$costo1;
        $su1=$can1+$cantidad;

        $actualiza="UPDATE carrito SET costo = '$su', cantidad = '$su1' WHERE id = '$id1';";
        $resul= mysqli_query($conexion,$actualiza);

        if ($resul) {

                header("location:ver_carrito.php");
        
}
else{
        header("location:welcome2");
}


}else{




        $total=$costo*$cantidad;
$carrito=("INSERT INTO carrito (nombre, foto, costo, descripcion, categoria, cantidad, mpdc ,id) VALUES ('$nombre','$foto','$total','$descripcion','$categoria', '$cantidad','$mpdc', '$id')");

$resultado=mysqli_query($conexion,$carrito);

if (!$resultado) {
        echo "<center><h1 clase='bg-dark'>No se agrego al carrito con exito</h1></center>";
}else{
                header ("location: ver_carrito.php");

}
}
}else{

        $total=$costo*$cantidad;
$carrito=("INSERT INTO carrito (nombre, foto, costo, descripcion, categoria, cantidad, mpdc ,id) VALUES ('$nombre','$foto','$total','$descripcion','$categoria', '$cantidad','$mpdc', '$id')");

$resultado=mysqli_query($conexion,$carrito);

if (!$resultado) {
        echo "<center><h1 clase='bg-dark'>No se agrego al carrito con exito</h1></center>";
}else{
                header ("location: ver_carrito.php");

}

}





?>