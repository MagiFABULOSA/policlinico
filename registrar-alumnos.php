<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISTORIAL</title>
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
                <h1>REGISTRO DE ALUMNOS</h1> <!--este es el inicio del panel de registro de alumnos -->
                <form method="POST" action="registrar-alumnos.php">
                    <fieldset class="form-4">
                        <div class="form-left">
                            <div>
                                <label for="nombre">NOMBRE:</label>
                                <br>
                                <input class="controls-2" type="text" name="nombre" id="nombre" required> <!--este apartado esta para registrar el nombre del alumno -->
                            </div>
                            <div>
                                <label for="apellido">APELLIDO</label>
                                <br>
                                <input class="controls-2" type="text" name="apellido" id="apellido"> <!--este apartado esta para registrar el apellido del alumno -->
                            </div>
                            <div>
                                <label for="cedula">CEDULA</label>
                                <br>
                                <input class="controls-2" type="number" name="cedula" id="cedula"> <!--este apartado esta para registrar el documento de identidad del alumno -->
                            </div>
                            <div>
                                <label for="matricula">N° MATRICULA</label>
                                <br>
                                <input class="controls-2" type="text" name="matricula" id="matricula"> <!--este apartado esta para registrar la matricula del alumno -->
                            </div>
                            <div>
                                <label for="celular">CELULAR</label>
                                <br>
                                <input class="controls-2" type="number" name="celular" id="celular"> <!--este apartado esta para registrar el numero telefonico del alumno -->
                            </div>
                        </div>                 
                    </fieldset>
                    <br>
                    <button class="myButton" type="submit">Guardar</button> <!--este apartado esta para guardar los cambios realizados en la casillas anteriores -->
                    <button class="myButton" type="reset">Cancelar</button> <!--este apartado esta para cancelar los cambios realizados en la casillas anteriores -->
                </form>
            </div>
        </div>
    </div>
    <?php
    require 'connection.php';
    if(isset($_POST['nombre'])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $cedula = $_POST["cedula"];
        $matricula = $_POST["matricula"];
        $celular = $_POST["celular"];
        $sql = "INSERT INTO alumno (nombre_alumno, apellido_alumno, cedula_alumno, matricula, celular_alumno) VALUES ('$nombre', '$apellido', '$cedula', '$matricula', '$celular')";
        if (mysqli_query($conn, $sql)) {
        } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    ?>
</body>
</html>