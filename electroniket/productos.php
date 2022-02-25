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
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	
	<meta name="viewport" content="width=640"/>
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


<?php 
if(isset($_GET['codigo'])){
  include "eliminar.php";
}
?>


	<!--Navbar -->

<nav class="mb-1 navbar navbar-expand-lg navbar-dark f2">
  <a class="navbar-brand" href="welcome.php">Electroniket</a>
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
      <!--li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Productos
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="añadir.php">Añadir Productos</a>
          <a class="dropdown-item" href="productos.php">Mis Productos</a>
          <a class="dropdown-item" href="#"></a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-google-plus-g"></i>
        </a>
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
          <a class="dropdown-item" href="perfil.php">Perfil</a>
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
<br>
<br>
<br>




<center>
        <h1 class="h1-responsive font-weight-bold mt-sm-5">Mis productos </h1>
        <hr class="hr-light" style="background-color:#000000;">
    


      <table>
      <br>
       <tr>
        <?php
        $con=0;
        $sql = $conexion->query("SELECT * FROM productos where mail='$mail'");
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
    <p class="card-text">$'.$row['costo'].'</p>
    <a type="button" class="btn btn-danger" href="eliminar.php?id='.$row['id_pro'].'">Eliminar</a>
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
if($con==1){
echo "</tr>
<tr>";
$con=0;
}
      }
      ?>  
      </tr>     
      </table>
      </center>


      
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