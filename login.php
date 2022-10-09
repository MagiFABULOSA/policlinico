<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/img/ico.png" type="image/x-icon">
	<script src="https://kit.fontawesome.com/6e53bd0bda.js" crossorigin="anonymous"></script><!--conexion a fontawesome para los iconos-->
	<link rel="stylesheet" href="assets/css/login.css"><!--Conexion con css-->
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400&display=swap');
    </style>
	<title>Iniciar Sesión</title>
</head>
<body>
	<!--Contenido del login-->
	<section class="form-login"><!--Icono del login-->
		<div class="icono">
			<i class="fa-solid fa-circle-user"></i>
		</div><!--Fin del icono del login-->
		<h2>Bienvenido</h2><!--El titulo-->
		<form method = "post" action = "authenticate.php">
			<select class="controls" name="privilege" id="privilege">Privilegio 
				<option value="1">ADMINISTRADOR</option>
				<option value="2">DOCENTE</option>
				<option value="3">ALUMNO</option>
			</select>
			</br>
			<input class="controls" type="text" style="text-transform:uppercase;" name="username" placeholder="Usuario"><!-- Campo de Usuario-->
			<input class="controls" type="password" name="passwd" id="passwd" placeholder="Contraseña"><!--Campo de Contrase;a-->
			<input class="check" type="checkbox" onclick="view_password()" > Mostrar contraseña
			<button class="myButton" type="submit" name="buttonlogin">Ingresar</button><!--Boton de Ingresar-->
		</form>
	</section>
	<!--Fin del contenido del Login-->
	<script>
	function view_password(){
		var tipo = document.getElementById("passwd");
		if(tipo.type == "password")
		{
			tipo.type = "text";
		}
		else
		{
			tipo.type = "password";
		}
	}
	</script>
</body>
</html>