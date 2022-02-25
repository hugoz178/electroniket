<?php
include 'bt.php';
include 'conex.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Electroniket</title>
  <link rel="shortcut icon" href="img/logo1.png">
  <link rel="stylesheet" type="text/css" href="CSS3.css">
  <meta name="viewport" content="width=680"/>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark f2">
  <a class="navbar-brand" href="index.php"><img src="img/logo1.ico" width="27" class="animated bounce infinite" alt="Transparent MDB Logo" id="animated-img1"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ingresa.php">Inicia sesion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro.php">Registrate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nosotros.php">Quienes somos?</a>
      </li>
    </ul>
    <span class="navbar-text white-text">
      Electroniket
    </span>
  </div>
</nav>




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

      <div class="container">
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
    <a class="btn peach-gradient" href="ingresa.php">$'.$row['costo'].'</a>
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
      </div>
<br>
<br>

    </div>
    <div class="col-lg-1 col-md-12">
      
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