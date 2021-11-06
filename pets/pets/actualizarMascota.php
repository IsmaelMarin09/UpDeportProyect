<?php
    $id=$_POST['id'];
    $nombre=$_POST['name'];
    $raza=$_POST['raza'];
    $categoria=$_POST['categoria'];
    $genero=$_POST['genero'];
    require("conexion.php");
    $actualizar="UPDATE tablepets SET id='$id',nombre='$nombre',raza='$raza',categoria='$categoria', genero='$genero' WHERE id='$id' ";
    $mysqli->query($actualizar);
    echo "<script>alert('Usted se le dio la gana de cambiar los datos')</script>";
    echo "<script>location.href='dashboard.php'</script>";


?>