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
    <title>Registrar Usuario</title>
    <link rel="shortcut icon" href="assets/img/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400&display=swap');
    </style>
</head>
<body>
    <div class="nav-bar">
        <a class="logo" href="admin_panel"><img class="site-logo" src="assets/img/logo.png" alt=""></a>
        <nav class="menuhorizontal">
            <a href="logout.php"><i class="fa-solid fa-person-walking-arrow-right"></i> Cerrar Sesión</a> <!--este apartado esta para cerrar la sesion de la cuenta ingresada -->
        </nav>
    </div>
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
        <div class="form-5">
            <div class="form-2">
                <h1>MODIFICAR USUARIO</h1>
                <form method="post" action="edit_user.php">
                    <fieldset class="form-4">
                        <div class="form-left">
                            <div>
                                <label for="name-user">ID DEL USUARIO</label>
                                </br>
                                <input class="controls-2" type="text" style="text-transform:uppercase;" name="id_username" id="id_usuario" value="<?php echo $_GET['id_user']; ?>" readonly></br>
                            </div>
                            <div>
                                <label for="name-user">NOMBRE DE USUARIO</label>
                                </br>
                                <input class="controls-2" type="text" style="text-transform:uppercase;" name="username" id="usuario"></br>
                            </div>
                            <div>
                                <label for="user-pass">CONTRASEÑA</label>
                                </br>
                                <input class="controls-2" type="password" name="passwd"></br>
                            </div>
                            <div>
                                <label for="privilegios">PRIVILEGIO</label>
                                </br>
                                <select class="controls-2" name="privilege" id="tipo_usuario">Privilegio 
                                    <option value="1">ADMINISTRADOR</option>
                                    <option value="2">DOCENTE</option>
                                    <option value="3">ALUMNO</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    </br>
                    <button class="myButton" type="submit" name="buttonguardar">GUARDAR</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST['username'])){
        $id_username = $_POST["id_username"];
        $username = $_POST["username"];
        $passwd = $_POST["passwd"];
        $privilege = $_POST["privilege"];
        if(isset($_POST["buttonguardar"])){
            $password_encrypted = password_hash($passwd, PASSWORD_BCRYPT);
            $db_updating = "UPDATE login SET username='$username', passwd='$password_encrypted', privilege='$privilege' WHERE id_user=$id_username";
            $result = mysqli_query($conn, $db_updating);
            if($result){
                echo "<script> alert('Usuario modificado: $username');window.location= 'user' </script>";
            }
            else 
            {
                echo "Error: " .$sql."<br>".mysql_error($conn);
            }
        
        }
        mysqli_close($conn);
    }
?>