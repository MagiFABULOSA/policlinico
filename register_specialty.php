<?php
session_start();
require 'config/connection.php';
require 'includes/auth_validate.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400&display=swap');
    </style>
    <Title>Especializaciones</Title>
</head>
<body>

<!-- Barra Vertical Izquierda -->
    <div class="nav-bar">
        <a class="logo" href="admin_panel"><img class="site-logo" src="assets/img/logo.png" alt=""></a>
        <nav class="menuhorizontal">
            <a href="logout.php"><i class="fa-solid fa-person-walking-arrow-right"></i> Cerrar Sesión</a> <!--este apartado esta para cerrar la sesion de la cuenta ingresada -->
        </nav>
    </div>
    <div class="all-2">
        <!-- Barra Horizontal Superior -->
        <div class="menu">
            <nav class="menuvertical-1">
                <a href="admin_panel"><i class="fa-solid fa-house-medical"></i> Inicio</a> 
                <!--este apartado esta para abrir los usuarios registrados -->
                <a href="register_doctor"><i class="fa-solid fa-user-doctor"></i> Doctor</a>
                <!--este apartado esta para abrir los profesionales encargados -->
                <a href="register_student"><i class="fa-solid fa-graduation-cap"></i> Alumnos</a>
                <!--este apartado esta para abrir los usuarios registrados -->
                <a href="register_specialty"><i class="fa-solid fa-stethoscope"></i> Especialidades</a>
                <!--este apartado esta para abrir la lista de las especialidades -->
                <a href="register_user"><i class="fa-solid fa-user"></i> Usuario</a> 
                <!--este apartado esta para abrir los usuarios registrados -->
                <a href="about.html"><i class="fa-solid fa-circle-question"></i> Ayuda</a>
                <!--este apartado esta para abrir el menu de ayuda -->
            </nav>
        </div>
        <!-- Área Central -->
        <div class="form-5">
            <div class="form-2">
                <h1>Especializaciones</h1>
                <form method="post" action="register_specialty.php">
                    <fieldset class="fomr-4">
                        <div class="form-left">
                            <div>
                                <label>Nombre de Especialidad</label>
                                <br>
                                <input class="controls-2" type="text" name="specialty" id="specialty"/>
                            </div>
                        </div> 
                    </fieldset>
                    <br>
                    <button class="myButton" type="submit">Guardar</button>
                    <button class="myButton" type="reset">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    require 'config/connection.php';
    if(isset($_POST['specialty'])){
        $specialty = $_POST["specialty"];
        $sql = "INSERT INTO specialty (specialty) VALUES ('$specialty')";
        if (mysqli_query($conn, $sql)) {
        } else {
        }
        mysqli_close($conn);
    }
    ?>
</body>
</html>