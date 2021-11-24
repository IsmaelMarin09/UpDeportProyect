<?php
    session_start();
    error_reporting(0);
    
    if($_SESSION['rol']!="Hunter"){
        echo '<script>alert("NO POSEE LOS PERMISOS PARA ESTAR EN ESTA INTERFAZ")</script>';
        echo "<script>location.href='../extras/login.php'</script>";
    }

?> 