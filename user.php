<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400&display=swap');
    </style>
</head>
<body>
    <div class="nav-bar">
        <a class="logo" href="login"><img class="site-logo" src="img/logo.png" alt=""></a>
        <nav class="menuhorizontal">
            <a href="index.html"><i class="fa-solid fa-house-medical"></i> Inicio</a> <!--este apartado esta para abrir el inicio de la pagina -->
            <a href="">NUEVO PACIENTE</a> <!--este apartado esta para abrir el apartado de nuevo paciente -->
            <a href="">NUEVA CONSULTA</a> <!--este apartado esta para abrir el apartado de nueva consulta -->
            <a href="config.html"><i class="fa-solid fa-sliders"></i> Configuración</a> <!--este apartado esta para abrir la configuracion de la pagina  -->
            <a href=""><i class="fa-solid fa-person-walking-arrow-right"></i> Cerrar Sesión</a> <!--este apartado esta para cerrar la sesion de la cuenta ingresada -->
        </nav>
    </div>
    <div class="all-1">
            <div class="menu">
                <nav class="menuvertical-1">
                    <a href="perfil"><i class="fa-solid fa-user"></i> Usuario</a> 
                    <!--este apartado esta para abrir los usuarios registrados -->
                    <a href="perfil"><i class="fa-solid fa-user-doctor"></i> Profesional</a>
                    <!--este apartado esta para abrir los profesionales encargados -->
                    <a href="registrar-paciente"><i class="fa-solid fa-bed-pulse"></i> Pacientes</a>
                    <!--este apartado esta para abrir la lista de paciente -->
                    <a href="consulta.html"><i class="fa-solid fa-people-group"></i> Consultas</a>
                    <!--este apartado esta para abrir la lista de consultas -->
                    <a href="alumnos.html"><i class="fa-solid fa-graduation-cap"></i> Alumnos</a>
                    <!--este apartado esta para abrir los usuarios registrados -->
                    <a href="especialidades.html"><i class="fa-solid fa-stethoscope"></i> Especialidades</a>
                    <!--este apartado esta para abrir la lista de las especialidades -->
                    <a href="historial.html"><i class="fa-solid fa-book-medical"></i> Historial</a>
                    <!--este apartado esta para abrir el Historial de las acciones realizadas -->
                    <a href="about.html"><i class="fa-solid fa-circle-question"></i> Ayuda</a>
                    <!--este apartado esta para abrir el menu de ayuda -->
                </nav>
            </div>
        <div class="form-5">
            <div class="form-2">
                <h1>REGISTRAR USUARIO</h1>
                <form method="post" action="user.php">
                    <fieldset class="form-4">
                        <div class="form-left">
                            <div>
                                <label for="name-user">NOMBRE DE USUARIO</label>
                                </br>
                                <input class="controls-2" type="text" name="usuario" id="usuario"></br>
                            </div>
                            <div>
                                <label for="user-pass">CONTRASEÑA</label>
                                </br>
                                <input class="controls-2" type="password" name="password"></br>
                            </div>
                            <div>
                                <label for="privilegios">PRIVILEGIO</label>
                                </br>
                                <select class="controls-2" name="tipo_usuario" id="tipo_usuario">Privilegio 
                                    <option value="1">ADMINISTRADOR</option>
                                    <option value="2">DOCENTE</option>
                                    <option value="3">ALUMNO</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    </br>
                    <button class="myButton" type="submit">REGISTRAR</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    require 'connection.php';
    if(isset($_POST['usuario'])){
        $user = $_POST["usuario"];
        $password = $_POST["password"];
        $tipo_usuario = $_POST["tipo_usuario"];
        $sql = "INSERT INTO usuario (nombre_usuario, clave_usuario, tipo_usuario) VALUES ('$user', '$password', '$tipo_usuario')";
        if (mysqli_query($conn, $sql)) {
        } else {
        }
        mysqli_close($conn);
    }
    ?>
</body>
</html>