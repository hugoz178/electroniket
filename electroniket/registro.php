<?php
include 'bt.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registar usuario</title>
  <link rel="icon" href="img/logo1.ico">
	<script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
  <meta name="viewport" content="width=device-width"/>
</head>
<body style="overflow-x:hidden " class="sunny-morning-gradient"><br>
  <center>
	<div class="row">
	<div class="col-sm-3" ></div>
	<div class="col-sm-6" >
	<center>
	
	<div class="card">

    <form action="regis_us.php" method="POST" id="form">
		  <div class="card-body">
         
        <?php
      if (isset($_GET['error'])) {
        echo "<center><div class='alert alert-danger'>Error al registrar el usuario</div></center><br>";
      }
    
      if (isset($_GET['correcto'])) {
       echo "<center><div class='alert alert-success'>Registro con exito</div></center><br>";
      }
      ?>
			 <div class="container">
        <a href="index.php"><img src="img/logo1.ico" style="width: 8%" class="float-left animated bounce infinite" alt="Transparent MDB Logo" id="animated-img1"></a>
			   <!--a href="ingresa.php" class="float-left"><i class="fas fa-igloo"></i></i></a-->
			   <h3 class="h3-responsive font-weight-bold mt-sm-5" style="color:gray;">¡Registrate!</h3>
			   <hr class="hr-secondary">
			   </div>

		<center>

		    <div class="form-group">	
			   <div class="md-form">
				    <input type="text" id="usuario" class="form-control validate" name="usuario">
				    <label for="usuario" data-success="right" class="disabled">Nombre de usuario:</label>
			   </div>
		    </div>

		    <div class="form-group">
			   <div class="md-form">
				    <input type="email" id="inputValidationEx" class="form-control validate" name="correo">
				    <label for="inputValidationEx" data-error="wrong" data-success="right">Correo Electronico</label>
			   </div>
		    </div>




		    <div class="form-group">
		    	<div class="md-form">
		    		<input type="password" id="contrasena" name="contrasena" class="form-control validate">
		    		<label for="contrasena" data-error="wrong" data-success="right">Contraseña</label>
		    	</div>
		    </div>

		    <div class="form-group">
		    	<div class="md-form">
		    		<input type="password" id="confirmar" name="confirmar" class="form-control validate">
		    		<label for="confirmar" data-error="wrong" data-success="right">Contraseña</label>
		    	</div>
		    </div>		

		    </center>
    <input type="submit" class="btn peach-gradient" name="envia" value="Registrar">
		<p>Si tienes una cuenta <a href="ingresa.php">Inicia Sesión</a></p>
		</div>
	
	</div>
  <br>
	</form>
	</center>
	</div>
	<div class="col-sm-3"></div>
	</div>
</center>
</body>
</html>





<script type="text/javascript">

//java

$( "#form" ).bootstrapValidator({

   feedbackIcons: {
 
     valid: 'glyphicon glyphicon-ok',
 
     invalid: 'glyphicon glyphicon-remove',
 
     validating: 'glyphicon glyphicon-refresh'
 
   },
 
   fields: {
 
     usuario: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Debes ingresar tu nombre de usuario.'
 
         },

         regexp: {

                regexp: /[a-zs]/i,

                message: 'El nombre de usuario no permite el uso de dígitos ni caracteres especiales.\n'

          },

         stringLength: {
 
           min: 5,

           max: 15,
 
           message: 'Tu nombre de usuario debe de tener por lo menos 5 caracteres de longitud y 15 como máximo.'
 
         }
 
       }
 
     },



     correo: {
 
       validators: {

        emailAddress: {
 
           message: 'El correo electrónico debe ser válido.'
 
         },
 
         notEmpty: {
 
           message: 'Ingresa tu correo electrónico.'
 
         }
 
       }
 
     },


 
     contrasena: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Debes ingresar una contraseña.'
 
         },
 
         stringLength: {
 
           min: 5,
     max:25,
 
           message: 'Maximo 5 caracteres y maximo 25.\n'
 
         },

         identical: {
                        field: 'confirmar',
                        message:'Confirma tu contraseña. '
                    }

 
       }
 
     },
 
     
     confirmar: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Debes de confirmar tu contraseña.'
 
         },


         identical: {
                        field: 'contrasena',
                        message: 'La contraseñas deben de ser iguales.'
                    }
 
       }
 
     }   
 

  }
 
});

</script>

