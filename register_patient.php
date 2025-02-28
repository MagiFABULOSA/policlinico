<?php
session_start();
require '../config/connection.php';
require '../includes/auth_validate.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link rel="shortcut icon" href="../img/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400&display=swap');
    </style>
</head>
<body>
    <div class="nav-bar">
        <a class="logo" href="admin_panel"><img class="site-logo" src="../img/logo.png" alt=""></a>
        <nav class="menuhorizontal">
            <a href="index.html"><i class="fa-solid fa-house-medical"></i> Inicio</a>
            <a href="">NUEVO PACIENTE</a>
            <a href="">NUEVA CONSULTA</a>
            <a href="config.html"><i class="fa-solid fa-sliders"></i> Configuración</a>
            <a href=""><i class="fa-solid fa-person-walking-arrow-right"></i> Cerrar Sesión</a>
        </nav>
    </div>
    <div class="all-1">
        <div class="menu">
            <nav class="menuvertical-1">
                <a href="perfil"><i class="fa-solid fa-user"></i> Usuario</a>
                <a href="perfil"><i class="fa-solid fa-user-doctor"></i> Profesional</a>
                <a href="registrar-paciente"><i class="fa-solid fa-bed-pulse"></i> Pacientes</a>
                <a href="consulta.html"><i class="fa-solid fa-people-group"></i> Consultas</a>
                <a href="alumnos.html"><i class="fa-solid fa-graduation-cap"></i> Alumnos</a>
                <a href="especialidades.html"><i class="fa-solid fa-stethoscope"></i> Especialidades</a>
                <a href="historial.html"><i class="fa-solid fa-book-medical"></i> Historial</a>
                <a href="about.html"><i class="fa-solid fa-circle-question"></i> Ayuda</a>
            </nav>
        </div>
        <div class="form-5">
            <div class="form-2">
                <h1>Registrar paciente</h1>
                <br>
                <div class="form-3">
                    <form action="resultado.html" method="get">
                        <fieldset class="form-4">
                            <div class="form-left">
                                <div>
                                    <label for="ci">Cédula de Identidad / RG</label> 
                                    <br> 
                                    <input class="controls-2" type="text" name="ci" id="ci" > <input class="check" type="checkbox" name="notiene">No posee
                                </div>
                                <div>
                                    <label for="nombre">Nombre:</label>
                                    <br>
                                    <input class="controls-2" type="text" name="nombre" id="nombre" required>
                                </div>
                                <div>
                                    <label for="apellido">Apellido: </label>
                                    <br>
                                    <input class="controls-2" type="text" name="apellido" id="apellido" required>
                                </div>
                                <div>
                                    <label for="direccion">Direccion:</label>
                                    <br>
                                    <input class="controls-2" type="text" name="direccion" id="direccion">
                                </div>
                                <div>
                                    <label for="telefono">Telefono:</label>
                                    <br>
                                    <input class="controls-2" type="text" name="telefono" id="telefono">
                                </div>
                                <div>
                                    <label for="correo">Correo:</label>
                                    <br>
                                    <input class="controls-2" type="email" name="correo" id="correo">
                                </div>
                                <div>
                                    <label for="Sexo">Sexo:</label>
                                    <br>
                                    <label><input class="controls-3" type=radio name="sexo" value="a" checked> Masculino</label>
                                    <label><input class="controls-3" type=radio name="sexo" value="b" > Femenino</label>
                                </div>
                                <br>
                                <div>
                                    <label for="HEA">HEA</label>
                                    <br>
                                    <textarea class="controls-6" name="hea" id="hea" cols="93" rows="6"></textarea>
                                </div>
                                <div>
                                    <label for="diagnostico">Diagnostico</label>
                                    <br>
                                    <textarea class="controls-6" name="diag" id="diag" cols="93" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="form-right">
                                <div>
                                    <label for="fechanacimiento">Fecha de nacimiento: </label>
                                    <br>
                                    <input class="controls-2" type="date" name="fechanacimiento" id="fechanacimiento">
                                </div>
                                <div>
                                    <label for="nacionalidad">Nacionalidad:</label>
                                    <br>
                                    <input class="controls-2" type="text" name="nacionalidad" id="nacionalidad">
                                </div>
                                <div>
                                    <label for="ciudad">Ciudad de Residencia:</label>
                                    <br>
                                    <input class="controls-2" type="text" name="ciudad" id="ciudad">
                                </div>
                                <div>
                                    <label for="estadocivil">Estado Civil</label>
                                    <br>
                                    <select class="controls-2" name="estadocivil" id="estadocivil">Estado Civil 
                                        <option value="soltero">Soltero/a</option>
                                        <option value="casado">Casado/a</option>
                                        <option value="divorciado">Divorciado/a</option>
                                        <option value="viudo">Viudo/a</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="edad">Edad</label> <label class="peso" for="peso">              Peso</label>
                                    <br>
                                    <input class="controls-4" type="number" name="edad" id="edad">
                                    <input class="controls-4" type="number" step="0.5" name="peso" id="peso">
                                </div>
                                <br>
                                <div>
                                    <label for="diagnosticos">Diagnosticos</label>
                                    <input class="check" type="checkbox" name="diagrap1"> PA
                                    <input class="check" type="checkbox" name="diagrap2"> FC
                                    <input class="check" type="checkbox" name="diagrap3"> FR
                                </div>
                                <div class="controls-7">
                                    <label for="plan">Plan</label>
                                    <br>
                                    <textarea class="controls-6" name="plan" id="plan" cols="93" rows="6"></textarea>
                                </div>
                                <div>
                                    <label for="cie-10">CIE10: </label>
                                    <br>
                                    <textarea class="controls-6" name="cie10" id="cie10" cols="93" rows="6"></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <button class="myButton" type="submit">GUARDAR</button>
                        <button class="myButton" type="reset">CANCELAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>