<?php
require_once './config/connection.php';
session_start();
if(isset($_POST['username'])){
    $username = $_POST["username"];
    $passwd = $_POST["passwd"];
    $privilege = $_POST["privilege"];
    if(isset($_POST["buttonlogin"])){
        $db_consulting="SELECT*FROM login where username='$username'"; 
        $result = mysqli_query($conn, $db_consulting);
        $row = mysqli_num_rows($result);
        $view = mysqli_fetch_array($result);
        if($row && password_verify($passwd,$view['passwd']) && $privilege==($view["privilege"])){
            if($privilege==1){
                header("location:admin_panel.php");
                $_SESSION['user_logged_in'] = TRUE;
            }
            elseif($privilege==2){
                header("location:doctor_panel.html");
                $_SESSION['user_logged_in'] = TRUE;
            }
            elseif($privilege==3){
                header("location:student_panel.html");
                $_SESSION['user_logged_in'] = TRUE;
            }
        }else{
            echo "<script> alert('Usuario y/o contraseña incorrecta');
                        location.href = 'login.php';
                        </script>";
        }
        mysqli_free_result($result);
    }

}
    mysqli_close($conn);
?>