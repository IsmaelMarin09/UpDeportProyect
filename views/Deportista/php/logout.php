<?php
    session_start();
    if(isset($_SESSION['unique_Id'])){
        include_once "../../../Model/config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $online = "Fuera de linea";
            $sql = mysqli_query($conn, "UPDATE users SET online = '{$online}' WHERE unique_Id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../../Extras/login.php");
            }
        }else{
            header("location: ../crearPublicacion.php");
        }
    }else{  
        header("location: ../../Extras/login.php");
    }
?>