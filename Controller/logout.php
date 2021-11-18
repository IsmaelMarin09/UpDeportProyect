<?php
    session_start();
    if(isset($_SESSION['unique_Id'])){
        include_once "db.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_Id']);
        if(isset($logout_id)){
            $status = "Offline now";
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