<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
	<script src="https://kit.fontawesome.com/6e53bd0bda.js" crossorigin="anonymous"></script><!--conexion a fontawesome para los iconos-->
	<link rel="stylesheet" href="css/login.css"><!--Conexion con css-->
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
		<form method = "post" action = "index.php">
			<input class="controls" type="text" name="usuario" placeholder="Usuario"><!-- Campo de Usuario-->
			<input class="controls" type="password" name="password" placeholder="Contraseña"><!--Campo de Contrase;a-->
			<input class="myButton" type="submit" value="Ingresar"><!--Boton de Ingresar-->
		</form>
	</section>
	<!--Fin del contenido del Login-->
	<?php
	require 'connection.php';
	if(isset($_POST['usuario'])){
		$usuario = $_POST["usuario"];
		$password = $_POST["password"];
		$consulta="SELECT*FROM usuario where nombre_usuario='$usuario' and clave_usuario='$password'"; 
		$resultado = mysqli_query($conn, $consulta);
		$filas = mysqli_num_rows($resultado);
		if($filas){
			header("location:user.php");
		}else{
			echo "<script> alert('Usuario y/o contraseña incorrecta');
						location.href = 'index.php';
						</script>";
		}
		mysqli_free_result($resultado);
		mysqli_close($conn);
	}
	?>
</body>
</html>