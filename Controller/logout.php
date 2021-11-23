<?php
    include_once ("../Model/conexion.php");
    session_start();
    if(isset($_SESSION['unique_Id'])){
        include_once "db.php";
        $objetoConexion= new conexion();
        $conexion = $objetoConexion->get_conexion();
        $img=$_GET['logout_id'];
        $online="Fuera de linea";
                $actu="UPDATE users SET online = '{$online}'  WHERE img=:img";
                $statement=$conexion->prepare ($actu);
                $statement ->bindParam(':img',$img);
                
                $statement ->execute();
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_Id']);
        if(isset($logout_id)){
            
            session_unset();
            session_destroy();
            header("location: ../views/Extras/login.php");
            
        }else{
            header("location: ../index.php");
        }
    }else{  
        header("location: ../views/Extras/login.php");
    }
?>