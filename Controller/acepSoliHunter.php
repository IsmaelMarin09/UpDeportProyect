<?php
 require_once('../Model/conexion.php');
 require_once('../Model/consutasAdmin.php');
$id=$_GET['id_hunter']; 
if (isset($id)) {
    $objetoConsultas= new consultasAdmin();
    $result =$objetoConsultas-> ModInfoPerfil("estado","Aceptada",$id,"documentoshunters");
    $result2 =$objetoConsultas-> ModInfoPerfil("estado","Habilitado",$id,"users");
    echo "<script>location.href='../views/Admin/autorizarCuentas.php' </script>"  ;
}else {
    echo  "<script> alert('Por favor no intente ingresar por este link puede producir fallos.') </script>";
    echo "<script>location.href='../views/Admin/listarSoliHunters.php"  ;
}






















?>