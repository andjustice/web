<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>	

<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
	<title>Contacto Sanitrol</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="css/style-form-sanitrol.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<!-- Códigos de validación para el formulario -->
	
	<script src="js/jquery.validate.js"></script>
	<script src="js/jquery.form.js"></script>
<!-- Script que llama a la validación del formulario -->

	<script>
		$(function(){
			$('#formulario').validate({
				submitHandler: function(form) {
				    $(form).ajaxSubmit({
					    url: 'process.php',
					    success: function(data) {
					    		
						    
						    $('#formulario').hide();
						    $('#contenedor').append("<div class='thanks'></div>")
					    }
				    });
			    }
			});         
		});
	</script>

<!-- Fin códigos de validación del formulario -->
	
	
	
</head>	
<body>

<div id="contenedor">		
		<form id="formulario" name="formContacto" method="post" action="process.php" >
			<input class="nombre" name="name" placeholder="Nombre" class="required" />
			<input class="tel" name="phone" placeholder="Telefono" class="required" />
			<input class="botonAcceder" type="submit" id="boton" value="ENVIAR" />
		</form>
</div>
</body>
</html>
  



	





