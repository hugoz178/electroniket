<?php
session_start();
include 'bt.php';
include 'conex.php';
error_reporting(0);
$str = $_SESSION['s_correo'];
if ($str == null || $str = ''){
 	header("Location:ingresa.php");
 	die();
 }
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
  <title>Electroniket</title>
  <link rel="shortcut icon" href="img/logo1.png">
  <link rel="stylesheet" type="text/css" href="CSS3.css">
  
</head>
<body >

<!--Navbar -->
  <nav class="f1">
  <div class="container">
<nav class="mb-1 navbar navbar-expand-lg navbar-dark f2">
  <a class="navbar-brand" href="welcome2.php">Electroniket</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <?php 
        $mail=$_SESSION['s_correo'];
        $sql1= "SELECT * FROM usuarios WHERE mail = '$mail'";
        $result1=$conexion->query($sql1);
        while ($ver=mysqli_fetch_array($result1)) {
          ?>
      <a class="nav-link" href="#"><?php echo $ver['user'];?>
          <span class="sr-only">(current)</span>
        </a>
        <?php
        }
        ?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="buscar.php">Buscar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="miscompras.php">Mis compras</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        
          <?php
         $mpdc = $_SESSION['s_correo'];

         $sql=("SELECT * FROM saldo where mail='$mpdc'");
        $result=mysqli_query($conexion,$sql);
        while($res=mysqli_fetch_array($result))
        {
          $saldo=$res['saldo'];
        }

        if($saldo==0){
  echo '<a class="btn btn-outline-white waves-effect px-3" href="saldo.php"><i class="fas fa-plus" aria-hidden="true" > <span class="counter"> $0</span></i></a>';
}else{
  $sql2 = $conexion->query("SELECT * FROM saldo where mail='$mpdc'");
      while ($row1=mysqli_fetch_array($sql2)) {
        echo '<a class="btn btn-outline-white waves-effect px-3" href="saldo.php"><i class="fas fa-plus" aria-hidden="true" > <span class="counter"> $ '.$row1['saldo'].'</span></i></a>';
      }
}
         ?>
      </li>
       <li class="nav-item">
        <?php
         $mpdc = $_SESSION['s_correo'];
         $query = "SELECT count(*) as total from carrito where mpdc='$mpdc' ";

         if ($result = mysqli_query($conexion, $query)) {

         $data=mysqli_fetch_assoc($result);

         echo '<a class="btn btn-outline-white waves-effect px-3" href="ver_carrito.php"><i class="fas fa-shopping-cart" aria-hidden="true" > <span class="counter"> '.$data['total'].'</span></i></a>
         ';
} 
         ?>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <?php 
                
        $s = "SELECT * FROM fotop WHERE mail='$mail' ";
        $res=$conexion->query($s);
        while ($ver1=mysqli_fetch_array($res)) {
          ?>
      <i><?php echo '<img src="data:image/png;base64,'.base64_encode($ver1['foto']). '"  class="rounded-circle z-depht-0" alt="avatar image" height="35" >'; ?></i>
        <?php
        }
        ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="perfil1.php">Perfil</a>
          <a class="dropdown-item" href="cerrar.php">Cerrar Sesion</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
</nav>
<!--/.Navbar -->





<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">


<!-- Card Narrower -->
<div class="card card-cascade narrower">

  <!-- Card image -->
  <div class="view view-cascade overlay">



      <center>
      <div class="fakeimg" style="width: 80%;">
         
        <?php   
        $s = "SELECT * FROM fotop WHERE mail='$mail' ";
        $res=$conexion->query($s);
        while ($ver1=mysqli_fetch_array($res)) {
          ?>
      <p><?php echo '<img src="data:image/png;base64,'.base64_encode($ver1['foto']). '"  class="mr-3 mt-3" style="width:80%;">'; ?></p>
        <?php
        }
        ?>

      </div>
    </center>
       <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <div class="card-body card-body-cascade">

      <p><a href="regis_foto1.php">Guarda</a>/<a href="act_foto1.php">Actualiza</a></p>
      <!--form action="guardar_foto.php" method="POST" enctype="multipart/form-data">
      <input class="" type="file" name="foto" id="foto" name="foto" accept="image/png, .jpeg, .jpg, image/gif">
      <input type="submit" name="hola" value="Registra"-->
  </form>
      
        <?php 
        $sql8= "SELECT * FROM usuarios WHERE mail = '$mail'";
        $result8=$conexion->query($sql8);
        while ($ver8=mysqli_fetch_array($result8)) {
          ?>
      <h1><?php echo $ver8['user'];?></h1>
          <span class="sr-only">(current)</span>
        <h4><?php echo $ver8['mail']; ?></h4>

        <?php
        }
        ?>
      <hr class="d-sm-none">
      </div>
    </div>
    </div>








    <div class="col-sm-8">

<div class="jumbotron hoverable p-4">


            <?php 


  
  $resultado=mysqli_query($conexion,"SELECT * FROM formulario WHERE mail='$mail'");


  while ($consulta=mysqli_fetch_array($resultado)) {
  ?>

  <p>Nombre completo: <?php echo $consulta['nombre']." ".$consulta['paterno']." ".$consulta['materno'];?></p>

  <p>Estado: <?php echo $consulta['estado'];?></p>
  <p>Ciudad: <?php echo $consulta['ciudad'];?></p>
  <p>Domicilio: <?php echo $consulta['domicilio'];?></p>
  <p>Postal: <?php echo $consulta['postal'];?></p>
  <p>Telefono: <?php echo $consulta['telefono'];?></p>
  <p>Descripción: <?php echo $consulta['descripcion'];?></p>



<?php           
  }

?> 
<p><a href="form_datos_us1.php">Ingresa Datos</a>/<a href="form_up1.php">Actualizar informacion</a></p>

</div>



    </div>
  </div>
</div>

<br>
<br>

<!-- Footer -->
<footer class="page-footer font-small peach-gradient">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">&copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Copyright:
    <a href="index.php"> Electroniket</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</body>
</html>