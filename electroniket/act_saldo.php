<?php
ob_start();
include 'conex.php';
session_start();
$mail=$_SESSION['s_correo'];
$saldo=$_POST['saldo'];

    $sql=("SELECT * FROM saldo where mail='$mail'");
        $result=mysqli_query($conexion,$sql);
        while($res=mysqli_fetch_array($result))
        {
          $saldo1=$res['saldo'];
          $mail1=$res['mail'];
        }

if($mail==$mail1){
	$tol=$saldo+$saldo1;
	$actualiza="UPDATE saldo SET saldo = '$tol', mail ='$mail' WHERE mail = '$mail';";
    $resul= mysqli_query($conexion,$actualiza);

    if ($resul) {

         header("Location:saldo.php?correcto=2");
        
	}
	else{
	    header("Location:ac_saldo.php?error=1");
	}
	}else{
		header("Location:ac_saldo.php?error=1");
	}
?>