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
<head>
	<meta charset="utf-8">
	<title>Electroniket</title>
	<meta name="viewport" content="width=640"/>
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


<!--/.Navbar -->
	  

	  <div class="container">
  <div class="row">
    <div class="col-lg-1 col-md-12">
     
    </div>
    <div class="col-lg-10 col-md-12">



<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/car1.jpg"
        alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/car2.jpg"
        alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/car3.jpg"
        alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


      <center>
        <h1 class="h1-responsive font-weight-bold mt-sm-5">Productos </h1>
        <hr class="hr-light" style="background-color:#000000;">
    </center>


    	<table>
    	<br>
    	 <tr>
    	  <?php
    	  $con=0;
    	  $sql = $conexion->query("SELECT * FROM productos");
      while ($row=mysqli_fetch_array($sql)) {

?>
<td>
		<?php echo '
		<div class="card card-cascade narrower" >
  <div class="view view-cascade overlay">
  <center>
    <img src="'.$row["foto"].'" class="card-img-top" alt="photo" style="width:300px; height:300px;">
    </center>
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <div class="card-body card-body-cascade">
    <h5 class="green-text pb-2 pt-1"><i class="fas fa-shopping-bag"></i>  '.$row['categoria'].'</h5>
    <h4 class="font-weight-bold card-title">'.$row['nombre'].'</h4>
    <p class="card-text">'.$row['descripcion'].'</p>
    <a class="btn peach-gradient" href="datos.php?id='.$row['id_pro'].'">$'.$row['costo'].'</a>
  </div>
  <div class="card-footer text-muted text-center ">
    Contamos con '.$row['cantidad'].'
  </div>
</div>
';
?>
</td>
<?php
$con=$con+1;
if($con==3){
echo "</tr>
<tr>";
$con=0;
}
	    }
	    ?>  
	    </tr>  		
    	</table>
<br>
<br>

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