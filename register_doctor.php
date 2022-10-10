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
    <title>Registrar Doctor</title>
</head>
<body>
<!-- Barra Vertical Izquierda -->
    <div class="nav-bar">
        <a class="logo" href="admin_panel"><img class="site-logo" src="assets/img/logo.png" alt=""></a>
        <nav class="menuhorizontal">
            <a href="logout.php"><i class="fa-solid fa-person-walking-arrow-right"></i> Cerrar Sesión</a> <!--este apartado esta para cerrar la sesion de la cuenta ingresada -->
        </nav>
    </div>
<!-- Barra Horizontal Superior -->
    <div class="all-1">
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
                <a href="users"><i class="fa-solid fa-user"></i> Usuario</a> 
                <!--este apartado esta para abrir los usuarios registrados -->
                <a href="about.html"><i class="fa-solid fa-circle-question"></i> Ayuda</a>
                <!--este apartado esta para abrir el menu de ayuda -->
            </nav>
        </div>
        <!-- Área Central -->
        <div class="form-5">
            <div class="form-2">
                <h1>Registrar Doctor</h1>
                <form action="resultados.html" method="GET">
                    <fieldset>
                        <div>
                            <label for="nombre">Nombre</label>
                            <br>
                            <input type="text" name="nombre" id="nombre">
                        </div>
                        <br>
                        <div>
                            <label for="apellido">Apellido</label>
                            <br>
                            <input type="text" name="apellido" id="apellido">
                        </div>
                        <br>
                        <div>
                            <label for="email">Email</label>
                            <br>
                            <input type="email" name="email" id="email">
                        </div>
                        <br>
                        <div>
                            <label for="telefono">Telefono</label>
                            <br>
                            <input type="text" name="telefono" id="telefono">
                        </div>
                        <br>
                        <div>
                            <label for="direc">Direccion</label>
                            <br>
                            <input type="text" name="direc" id="direc">
                        </div>
                        <br>
                        <div>
                            <label for="espec">Especialidades</label>
                            <br>
                            <label><input class="controls-3" type=checkbox name="especialidad" value="a" checked> Especialidad1</label>
                            <br>
                            <label><input class="controls-3" type=checkbox name="especialidad" value="b"> Especialidad2</label>
                            <br>
                            <label><input class="controls-3" type=checkbox name="especialidad" value="c"> Especialidad3</label>
                            <br>
                            <label><input class="controls-3" type=checkbox name="especialidad" value="d"> Especialidad4</label>
                        </div>    
                    </fieldset>
                    <br>
                    <button class="myButton" type="submit">Guardar</button>
                    <button class="myButton" type="reset">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>