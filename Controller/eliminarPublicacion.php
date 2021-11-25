<?php

require_once('../Model/conexion.php');
require_once('../Model/consutasAdmin.php');
$id=$_POST['id_eliminar'];


    $modelo= new Conexion();
    $conexion= $modelo->get_conexion();
    $sql="delete from publicaciones where id=:id";
    $statement= $conexion-> prepare($sql);
    $statement-> bindParam(':id',$id);
    if(!$statement){ 
        return"Error al eliminar Publicacion";
    }else{
        $statement->execute(); 
        }echo '<script>alert("Publicaion eliminada")</script>';
        echo "<script>location.href='../views/Admin/profile.php'</script>";






?>