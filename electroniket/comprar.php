<?php 

ob_start();

include 'conex.php';

session_start();

$mpdc = $_SESSION['s_correo'];

$message = '<!DOCTYPE html>

<html>

<body>

	<div>

	<h1 class="text-danger">Bienvenido a Electroniket!!</h1>

	<p>Gracias por Comprar en nuestra tienda<b> Electroniket</b> </p>

	<br>

	<h1><a href="https://www.nfparty.com/nfparty.com/diegomendozaromero/project/electroniket/ingresa.php">Iniciar sesion</a></h1>

	<p>Espera la confirmacion para los datos de tu producto y el envio</p>

	<br>

<p>Copyright &copy; 2019 &middot; Todos los derechos reservados</p>

</body>

</html>';

$cabeceras = 'MIME-Version: 1.0' . "\r\n";

$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";



$sql=("SELECT * FROM saldo where mail='$mpdc'");

        $result=mysqli_query($conexion,$sql);

        while($res=mysqli_fetch_array($result))

        {

          $saldo1=$res['saldo'];

          $mai=$res['mail'];

        }



        $qu = "SELECT SUM(costo) as co from carrito where mpdc='$mpdc' ";



         if ($r = mysqli_query($conexion, $qu)) {



         $da=mysqli_fetch_assoc($r);



         

} 





if($mpdc==$mai){

	$tu=$saldo1-$da['co'];





	$actualiza="UPDATE saldo SET saldo = '$tu', mail ='$mpdc' WHERE mail = '$mpdc';";

    $resul= mysqli_query($conexion,$actualiza);



    if ($resul) {



         $compra=("INSERT INTO compras SELECT * FROM carrito WHERE mpdc='$mpdc'");

$resultado=mysqli_query($conexion,$compra);





if (!$resultado) {

	header("location:ver_carrito.php?error=1");

}else{



if($tu==0){



	$elim1=("DELETE FROM saldo  WHERE mail = '$mai'");

	$re1=mysqli_query($conexion,$elim1);





if (!$re1) {

	header("location:ver_carrito.php?error=1");

}else{



$elim=("DELETE FROM carrito  WHERE mpdc='$mpdc'");

	$re=mysqli_query($conexion,$elim);





if (!$re) {

	header("location:ver_carrito.php?error=1");

}else{







mail($mpdc,"Gracias por comprar en Electroniket!",$message,$cabeceras);

		header("location:ver_carrito.php?correcto=1");



}



}



}else{

	$elim2=("DELETE FROM carrito  WHERE mpdc='$mpdc'");

	$re2=mysqli_query($conexion,$elim2);





if (!$re2) {

	header("location:ver_carrito.php?error=1");

}else{







mail($mpdc,"Gracias por comprar en Electroniket!",$message,$cabeceras);

		header("location:ver_carrito.php?correcto=1");



}

}





}

        

	}

	else{

	    header("location:ver_carrito.php?error=1");

	}

	

}

?>