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

<nav class="f1">
	<div class="container">
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
</div>
</nav>
<br>
<br>


<div class="container">
  <div class="row">
    <div class="col-lg-1 col-md-12">
     
    </div>
    <div class="col-lg-10 col-md-12">




      <ul class="nav nav-tabs" id="myTab" role="tablist">

  <li class="nav-item">
    <a class="nav-link active" id="diego-tab" data-toggle="tab" href="#diego" role="tab" aria-controls="diego"
      aria-selected="true">Diego</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="hugo-tab" data-toggle="tab" href="#hugo" role="tab" aria-controls="hugo"
      aria-selected="false">Hugo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="oziel-tab" data-toggle="tab" href="#oziel" role="tab" aria-controls="oziel"
      aria-selected="false">Oziel</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="david-tab" data-toggle="tab" href="#david" role="tab" aria-controls="david"
      aria-selected="false">David</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="diego" role="tabpanel" aria-labelledby="diego-tab">
    


    <!-- News jumbotron -->
<div class="jumbotron text-center hoverable p-4">
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-4 offset-md-1 mx-3 my-3">
      <!-- Featured image -->
      <div class="view overlay">
        <img src="img/diego.jpg" class="img-fluid z-depth-1 rounded-circle"
      alt="Responsive image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-md-7 text-md-left ml-3 mt-3">
      <h4 class="h4 mb-4">Diego Mendoza Romero</h4>
      <h2 class="font_weight-normal">Escribo mis palabras y es el corazón quién habla cuando voy soltando versos.</h2>
      <br>
      <br>
    <a class="btn aqua-gradient" href="https://www.facebook.com/diego.mendozaromero.5" target="_blank"><i class="fab fa-facebook-f pr-2" aria-hidden="true"></i>Facebook</a>
    <a class="btn purple-gradient" href="https://www.instagram.com/diero_mendoza/" target="_blank"><i class="fab fa-instagram pr-2" aria-hidden="true"></i>Instagram</a>
    <a class="btn blue-gradient" href="https://twitter.com/DiegoMendozaRo3?s=09" target="_blank"><i class="fab fa-twitter pr-2" aria-hidden="true"></i>Twitter</a>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>
<!-- News jumbotron -->




  </div>

  <div class="tab-pane fade" id="hugo" role="tabpanel" aria-labelledby="hugo-tab">
    
    <!-- News jumbotron -->
<div class="jumbotron text-center hoverable p-4">
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-7 text-md-left ml-3 mt-3">
      <h4 class="h4 mb-4">Hugo Hernandez Lopes</h4>
      <h1 class="font_weight-normal">No mates el tiempo viendo como el tiempo te mata.</h1>
      <br>
      <br>
    <a class="btn aqua-gradient" href="https://www.facebook.com/hugo.hdzlopez" target="_blank"><i class="fab fa-facebook-f pr-2" aria-hidden="true"></i>Facebook</a>
    <a class="btn purple-gradient" href="https://www.instagram.com/hugolopez178/?hl=es-la" target="_blank"><i class="fab fa-instagram pr-2" aria-hidden="true"></i>Instagram</a>
    <a class="btn blue-gradient" href="https://twitter.com/hdzlopezh" target="_blank"><i class="fab fa-twitter pr-2" aria-hidden="true"></i>Twitter</a>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-md-4 offset-md-1 mx-3 my-3">
      <!-- Featured image -->
      <div class="view overlay">
        <img src="img/hugo.jpg" class="img-fluid z-depth-1 rounded-circle"
      alt="Responsive image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>
<!-- News jumbotron -->

  </div>

  <div class="tab-pane fade" id="oziel" role="tabpanel" aria-labelledby="oziel-tab">
    
     <!-- News jumbotron -->
<div class="jumbotron text-center hoverable p-4">
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-4 offset-md-1 mx-3 my-3">
      <!-- Featured image -->
      <div class="view overlay">
        <img src="img/oziel.jpg" class="img-fluid z-depth-1 rounded-circle"
      alt="Responsive image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-md-7 text-md-left ml-3 mt-3">
      <h4 class="h4 mb-4">Oziel Obed Ramires Padilla</h4>
      <h1 class="font_weight-normal">El mundo es tuyo.</h1>
      <br>
      <br>
    <a class="btn aqua-gradient" href="https://www.facebook.com/ozielobed.ramirez" target="_blank"><i class="fab fa-facebook-f pr-2" aria-hidden="true"></i>Facebook</a>
    <a class="btn purple-gradient" href="https://www.instagram.com/ozielr8/" target="_blank"><i class="fab fa-instagram pr-2" aria-hidden="true"></i>Instagram</a>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>
<!-- News jumbotron -->

  </div>

  <div class="tab-pane fade" id="david" role="tabpanel" aria-labelledby="david-tab">
    
    <!-- News jumbotron -->
<div class="jumbotron text-center hoverable p-4">
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-7 text-md-left ml-3 mt-3">
      <h4 class="h4 mb-4">David Emanuel Celestino Narvaes</h4>
      <h3 class="font_weight-normal">Talvez tengas un millón de historias que tengas con alguien más, pero sabes que siempre seré tu primera vez</h3>
      <br>
      <br>
    <a class="btn aqua-gradient" href="https://www.facebook.com/davidemmanuel.celestinonarvaez" target="_blank"><i class="fab fa-facebook-f pr-2" aria-hidden="true"></i>Facebook</a>
    <a class="btn purple-gradient" href="https://www.instagram.com/p/B4lupKLgco6q0VqTyU3II6VVEr5tRzE832ABiI0/?igshid=1llhhz9yxg6r0" target="_blank"><i class="fab fa-instagram pr-2" aria-hidden="true"></i>Instagram</a>
    <a class="btn blue-gradient" href="https://twitter.com/Darck95196804?s=08" target="_blank"><i class="fab fa-twitter pr-2" aria-hidden="true"></i>Twitter</a>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-md-4 offset-md-1 mx-3 my-3">
      <!-- Featured image -->
      <div class="view overlay">
        <img src="img/david.jpg" class="img-fluid z-depth-1 rounded-circle"
      alt="Responsive image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>
<!-- News jumbotron -->

  </div>
</div>




    </div>
    <div class="col-lg-1 col-md-12">
      
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