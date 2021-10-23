<?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $clave=$_POST['clave'];
    $genero=$_POST['genero'];
    $municipio=$_POST['municipio'];
    $rol=$_POST['rol'];
    $deporte=$_POST['deporte'];
    $fNacimiento=$_POST['fNacimiento'];


    require("conexion.php");

    $insert="INSERT INTO users VALUES('','$nombre','$correo','$fNacimiento','$rol','$deporte','$clave','$municipio','$genero')";
    $mysqli->query($insert);
    echo '<script>alert("user registrado")</script>';
    echo "<script>location.href='login.php'</script>";

?>