<?php    
    require_once("../Model/conexion.php");
    require_once("../Model/consutasAdmin.php");
    
    $id_Usr1=$_POST["id_Usr1"];
    $id_Usr2=$_POST['id_Usr3'];
    $tipo=$_POST['tipo'];
    $descripcion=$_POST['descripcion'];
    $idP=$_POST['id_Usr2'];
    $estado='Pendiente';
    $objetoConsulta=new consultasAdmin();
    $result=$objetoConsulta->insertarDenuncias($id_Usr1,$id_Usr2,$tipo,$descripcion,$idP,$estado);

    echo"<script> window.location.replace('../views/Admin/index.php'); </script>";
            
     
    


?>    