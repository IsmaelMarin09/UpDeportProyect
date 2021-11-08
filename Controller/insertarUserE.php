<?php


    require_once("../Model/conexion.php");
    require_once("../Model/consultasE.php");
    $nombre=$_POST["nombre"];
    $email=$_POST['email'];
    $clave=$_POST['clave'];
    $municipio=$_POST['municipio'];
    $fNacimiento=$_POST['fNacimiento'];
    $genero=$_POST['genero'];
    $deporte=$_POST['deporte'];
    $rol=$_POST['rol'];
    $estado="activo"; 

    if (strlen ($nombre)>0 && strlen ($email)>0 && strlen ($clave)>0 && strlen ($municipio)>0 && strlen ($fNacimiento)>0 && strlen ($genero)>0 && strlen ($deporte)>0 && strlen ($rol)>0) {
       $clavemd=md5($clave);
       $objetoConsultas = new consultasE();
       $result = $objetoConsultas->registraUsersE($nombre, $email, $clavemd, $municipio, $fNacimiento, $genero, $deporte, $rol, $estado);
    }else {
        echo '<script>alert("porfavor llene todos los campos del formulario")</script>';
        //echo "<script>location.href='../views/extras/register.php'</script>";
    }


