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
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
  
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
<br>
<!--/.Navbar -->

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">

<div class="card">
    <div class="card-body">
  <center>
  <h3 class="h3-responsive font-weight-bold mt-sm-5" style="color:gray;">Ingresa tus productos</h3>
        <hr class="hr-secondary">
      </center>


        <form action="valida_foto.php" method="POST" enctype="multipart/form-data">
            
            <center>

                <label for="exampleForm2">Nombre de tu producto:</label>
                <input type="text" name="txtnom" required class="form-control">

                <label for="exampleForm2">Cantidad:</label>
                <input type="text" name="cantidad"  required class="form-control">

                <br>

                <select class="browser-default custom-select" type="text" name="categoria">
                  <option selected>Categoria del producto:</option>
                  <option data-tokens="">Nuevo</option>
                  <option data-tokens="">Semi-nuevo</option>
                  <option data-tokens="">Usado</option>
                </select>

                <br>

                <label for="exampleForm2">Costo:</label>
                <div class="input-group mb-3">
                  <div class="input-group-append">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="text" name="costo"  required class="form-control" > 
                </div>



                <div class="form-group shadow-textarea">
                  <label for="exampleFormControlTextarea6">Descripcion:</label>
                  <textarea type="text" name="des" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Descripcion"></textarea>
                </div>


                <label for="exampleForm2">Foto:</label>
                <input class="btn" type="file" name="foto" id="foto">
                <br>


                <button class="btn btn-success" type="submit" name="enviar">Subir</button>

            </center>

        </form>  
</div>
</div>

</div>
  <div class="col-sm-2"></div>
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

