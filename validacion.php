<!DOCTYPE html>
<html>
<head>
	<title>Validar formulario</title>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/parsley.remote.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<form id="formulario-validacion" action="validacion.php" data-parsley-validate>
		<input id="nombre" name="nombre" type="text" placeholder="Nombre" 
			required="" 
			data-parsley-trigger="change" 
			data-parsley-pattern="/^[a-z-ñáéíóúÑÁÉÍÓÚ ]+$/gi"
			data-parsley-pattern-message="Ingrese un nombre valido.">
		<input id="apellido" name="apellido" type="text" placeholder="Apellido"
			required="" 
			data-parsley-trigger="change" 
			data-parsley-pattern="/^[a-z-ñáéíóúÑÁÉÍÓÚ ]+$/gi"
			data-parsley-pattern-message="Ingrese un apellido valido.">
		<input id="email" name="email" type="email" placeholder="Email" 
			required="" 
			data-parsley-trigger="change" 
			data-parsley-type="email"
			data-parsley-error-message="Ingrese un Email valido">
		<input id="telefono" name="telefono" type="text" 
			placeholder="Telefono" 
			required=""	 
			data-parsley-type="digits"
			data-parsley-error-message="Ingrese un Numero de telefono valido.">

		<button type="submit">Enviar</button>
	</form>
</body>
</html>
<?php 
	if (count($_REQUEST) > 0) {
		echo count($_REQUEST);
		$nombre = $_REQUEST['nombre'];
		$apellido = $_REQUEST['apellido'];
		$email = $_REQUEST['email'];
		echo $nombre;
		echo $apellido;
		echo $email;
	}
 ?>