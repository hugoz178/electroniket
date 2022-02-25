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
</div>
</nav>
<!--/.Navbar -->






<div class="row">
  <div class="col-sm-4"></div>

  <div class="col-sm-4">

<div class="card">
    <div class="card-body">
<center>

	<h3 class="h3-responsive font-weight-bold mt-sm-5" style="color:gray;">Ingresa tu informacion</h3>
        <hr class="hr-secondary">


		<form action="editar1.php" method="POST">
	<?php
      if (isset($_GET['error'])) {
        echo "<center><div class='alert alert-danger'>No hay datos que actualizar</div></center><br>";
      }
    
		?>
			      	<?php 
      	$sql= "SELECT * FROM formulario WHERE mail = '$mail'";
      	$result=$conexion->query($sql);
      	while ($ver=mysqli_fetch_array($result)) {
      		?>

        <label for="exampleForm2">Nombre</label>
        <input type="text" name="nombre"  value="<?php echo $ver['nombre']; ?>" required class="form-control">

        <label for="exampleForm2">Apellido paterno</label>
        <input type="text" name="paterno" value="<?php echo $ver['paterno']; ?>" required class="form-control">

        <label for="exampleForm2">Apellido materno</label>
        <input type="text" name="materno" value="<?php echo $ver['materno']; ?>" required class="form-control">


        <label for="exampleForm2">Estado</label>
        <select class="browser-default custom-select" type="text" name="estado">
        		<option value="<?php echo $ver['estado'];?>" ><?php echo $ver['estado'];?></option>
                <option value="">-- Seleccione un Estado --</option>
    			<option value="México">México</option>
    			<option value="Sonora">Sonora</option>
    			<option value="Zacatecas">Zacatecas</option>
    			<option value="Coahuila">Coahuila</option>
    			<option value="Guanajuato">Guanajuato</option>
    			<option value="Oaxaca">Oaxaca</option>
    			<option value="Nuevo Leon">Nuevo Leon</option>
    			<option value="Guatemala">Guatemala</option>
    			<option value="Veracruz">Veracruz</option>
        </select>




        <label for="exampleForm2">Ciudad</label>
        <input type="text" name="ciudad" value="<?php echo $ver['ciudad'];?>" required class="form-control">

        <label for="exampleForm2">Domicilio</label>
        <input type="text" name="domicilio" value="<?php echo $ver['domicilio'];?>" required class="form-control">

        <label for="exampleForm2">Codigo Postal</label>
        <input type="text" name="postal" value="<?php echo $ver['postal'];?>" required class="form-control">

        <label for="exampleForm2">Telefono</label>
        <input type="text" name="telefono" value="<?php echo $ver['telefono'];?>" required class="form-control">

        <div class="form-group shadow-textarea">
        <label for="exampleFormControlTextarea6">Descripcion</label>
        <textarea type="text" name="descripcion" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" ><?php echo $ver['descripcion'];?></textarea>
        </div>

        <button class="btn btn-success" type="submit" name="up">Actualizar</button>
            	        <?php
      	}
      	?>


			<br>
      <a class="btn btn-danger" href="perfil.php">Regresar</a>

			
		</form>

			

			<br>
			<br>
			<br>

		



	

	</center>
</div>
</div>

</div>
  <div class="col-sm-4"></div>
  </div>
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