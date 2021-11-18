<?php
 require_once('../Model/conexion.php');
 require_once('../Model/consutasAdmin.php');
$id=$_GET['id_hunter']; 
echo $id;
if (isset($id)) {
    $objetoConsultas= new consultasAdmin();
    $result =$objetoConsultas-> ModInfoPerfil("estado","Denegada",$id,"documentoshunters");
    $result2 =$objetoConsultas-> ModInfoPerfil("estado","Inactivo",$id,"users");
}else {
    echo  "<script> alert('Por favor no intente ingresar por este link puede producir fallos') </script>";
    echo "<script>location.href='../views/Admin/listarSoliHunters.php"  ;
}






















?>