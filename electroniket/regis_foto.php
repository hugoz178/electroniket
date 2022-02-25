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
	<meta name="viewport" content="width=device-width"/>
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


	<div class="row">
		<div class="col-lg-3"></div>

		<div class="col-lg-6">

			<br>
			<br>
			<br>

			
			<div class="jumbotron hoverable p-4">
					<form action="guardar_foto.php" method="POST" enctype="multipart/form-data">
						<?php
      if (isset($_GET['error'])) {
        echo "<center><div class='alert alert-danger'>Ya tienes una imagen, actualizala.</div></center><br>";
      }
    
?>
					<h4 class="display-4" align="center">Vamos, Ingresa una fotografía para tu perfil!</h4>
					<input type="file" name="foto" accept="image/png, .jpeg, .jpg, image/gif" class="btn"><br>
					
						<input type="submit" name="envia" value="Guardar" class="btn btn-success"><a href="perfil.php" class="btn btn-danger">Regresar</a>
					</form>

					
				</div>
			</div>
		


		<div class="col-lg-3"></div>
	</div>

<br>
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