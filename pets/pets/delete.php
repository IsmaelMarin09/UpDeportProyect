<?php
    $id=$_GET['primaryD'];
    require("conexion.php");

    $eliminar="DELETE FROM tablepets WHERE id='$id'";
    $mysqli->query($eliminar);
    echo '<script>alert("Has eliminado, matado, extrujado, enganchado a tu mascota de nuestra base de datos :)")</script>';
    echo "<script>location.href='dashboard.php'</script>";

?>