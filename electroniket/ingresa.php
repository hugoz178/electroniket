<?php
include 'bt.php';
?>

<html>
<head>
	<title>Inicio de sesión</title>
	<link rel="icon" href="img/logo1.ico">
	<script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
	<meta name="viewport" content="width=device-width"/>
</head>
<body style=" overflow-x:hidden" class="sunny-morning-gradient">
	<br>
	<br>
	<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<center>
		<br>
    <div class="card">
    	<div class="card-body">
    		<div class="container">
    			<a href="index.php"><img src="img/logo1.ico" style="width: 13%" class="float-left animated bounce infinite" alt="Transparent MDB Logo" id="animated-img1"></a>
				<h3 class="h3-responsive font-weight-bold mt-sm-5" style="color:gray;">¡Inicia Sesión!</h3>
				<hr class="hr-secondary">
			</div>

    <form action="entra.php" method="POST" id="form">	
    <div class="form-group">
		<div class="md-form">
		<input type="email" id="correo" name="correo" class="form-control validate" required>
		<label for="correo" class="disabled" data-success="right">Correo Electronico:</label>
		</div>
	</div>
	<div class="form-group">
		<div class="md-form">
		<input type="password" id="contrasena" name="contrasena" class="form-control validate" required>
		<label for="contrasena" data-error="wrong" data-success="right">Contraseña</label>
		</div>
	</div>
	<br>
	<button class="btn peach-gradient" name="envia">Inicia Sesión</button>
	<p>¿No tienes cuenta? <a href="registro.php">Registrate</a></p>
	</form>
	</div>
	</div>
	</center>
	</div>
	<div class="col-sm-4"></div>
	</div>


</body>
</html>

