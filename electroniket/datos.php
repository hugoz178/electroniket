<?php
session_start();
include 'bt.php';
include 'conex.php';
error_reporting(0);
$str = $_SESSION['s_correo'];
if ($str == null || $str = ''){
  header("location:ingresa.php");
  die();
 }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Electroniket</title>
  <link rel="shortcut icon" href="img/logo1.png">
  <style type="text/css">
    .f1{
      background-color: #fa7339;
    }
    .f2{
      background-color: #ff550c;
    }
  </style>
</head>
<body style="overflow-x:hidden; ">
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
      <a class="nav-link" href=""><?php echo $ver['user'];?>
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


<div class="container">
  <div class="row">
    <div class="col-lg-1 col-md-12">
     
    </div>
    <div class="col-lg-10 col-md-12">








<?php
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $consulta=$conexion->query("SELECT * FROM productos WHERE id_pro='$id'");
  if ($as=mysqli_fetch_array($consulta)) {

?>







<br>
<br>
<?php
echo'
<form action="car.php?id_pro='.$as['id_pro'].'" method="POST">
<div class="jumbotron text-center hoverable p-4">


  <div class="row">


    <div class="col-md-4 offset-md-1 mx-3 my-3">


      <div class="view overlay">
      <img src="'.$as["foto"].'" class="img-fluid" alt="Sample image for first version of blog listing">
        
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>



    <div class="col-md-7 text-md-left ml-3 mt-3">

  
      <a href="#!" class="green-text">
        <h6 class="h6 pb-1"><i class="fas fa-shopping-bag pb-2 pt-1"></i> '.$as['categoria'].'</h6>
      </a>

      <h4 class="h4 mb-4">'.$as['nombre'].'</h4>

      <p class="font-weight-normal">'.$as['descripcion'].'</p>
      <p class="font-weight-normal">Contamos con <a><strong>'.$as['cantidad'].'</strong></a>, con el costo de c/$'.$as['costo'].'</p>

<div class="def-number-input number-input safari_only">
  <input class="quantity" min="0" name="can" value="1" type="number">
</div>
      
      <button  class="btn peach-gradient">Agregar al carrito</button>
</form>
    </div>


  </div>
 

</div>
'
?>
<br>
<br>
<br>




<?php
}else{
  echo '
  <!-- Jumbotron -->
  <br>
<div class="jumbotron text-center  lighten-2 white-text mx-2 mb-5 f1" >

  <!-- Title -->
  <strong><h1 class="card-title display-3 ">¡ERROR!</h1></strong>

  <!-- Subtitle -->
  <p class="my-4 h6">Ups, hay un pequeño fallo.</p>

  <!-- Grid row -->
  <div class="row d-flex justify-content-center">

    <!-- Grid column -->
    <div class="col-xl-7 pb-2">

      <p class="card-text">El producto que deseó comprar ya no está en existencia.</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-4 rgba-white-light">

  <div class="pt-2">
    <a href="welcome2.php"><button type="button" class="btn btn-outline-white">Regresa</button></a>
    
  </div>

</div>
<!-- Jumbotron -->
  ';
}
}else{
  echo '<h1>EXOOOO</h1>';
}
?>










 


    </div>
    <div class="col-lg-1 col-md-12">
      
    </div>
  </div>
</div>

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