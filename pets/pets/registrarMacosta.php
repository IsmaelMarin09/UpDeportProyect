<?php
    $nombre=$_POST['name'];
    $raza=$_POST['raza'];
    $categoria=$_POST['categoria'];
    $genero=$_POST['genero'];

    require("conexion.php");

    $insert="INSERT INTO tablepets VALUES('','$nombre','$raza','$categoria','$genero')";
    $mysqli->query($insert);
    echo '<script>alert("Mascota Registrada")</script>';
    echo "<script>location.href='add.php'</script>";

?>