<?php
require_once './config/connection.php';
session_start();
$username = $_POST["username"];
$passwd = $_POST["passwd"];
$privilege = $_POST["privilege"];
if(isset($_POST["buttonlogin"])){
    $db_consulting="SELECT*FROM login where username='$username'"; 
    $result = mysqli_query($conn, $db_consulting);
    $row = mysqli_num_rows($result);
    $view = mysqli_fetch_array($result);
    if($row && password_verify($passwd,$view['passwd']) && $privilege==($view["privilege"])){
        if($privilege=='ADMINISTRADOR'){
            header("location:admin_panel");
            $_SESSION['user_logged_in'] = TRUE;
            $_SESSION['privilege'] = $privilege['ADMINISTRADOR'];
        }
        elseif($privilege==2){
            header("location:doctor_panel");
            $_SESSION['user_logged_in'] = TRUE;
        }
        elseif($privilege==3){
            header("location:student_panel");
            $_SESSION['user_logged_in'] = TRUE;
        }
    }else{
        echo "<script> alert('Usuario y/o contraseña incorrecta');
                    location.href = 'login';
                    </script>";
    }
    mysqli_free_result($result);
}
mysqli_close($conn);
?>