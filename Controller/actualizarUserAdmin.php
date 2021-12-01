<?php
 require_once('../Model/conexion.php');
 require_once('../Model/consutasAdmin.php');
 


 $id = $_POST["id"];
 $unique_id= $_POST["uid"];
 $nombre= $_POST["nombre"];
 $email= $_POST["email"];
 $rol= $_POST["rol"];
 $deporte= $_POST["deporte"];
 $fNacimiento= $_POST["fNacimiento"];
 $municipio= $_POST["municipio"];
 $genero= $_POST["genero"];
 $estado= $_POST["estado"];
 if (strlen($id)>0 && strlen($unique_id)>0 && strlen($nombre)>0 && strlen($email)>0 && strlen($rol)>0 && strlen($deporte)>0 && strlen($fNacimiento)>0 && strlen($municipio)>0 && strlen($genero)>0 && strlen($estado)>0  ) {
     
    $objetoConsultas= new consultasAdmin();
    $result =$objetoConsultas->actualizarrUsers($id, $unique_id,$nombre,$email,$rol,$deporte,$fNacimiento,$municipio,$genero,$estado);
    
 }else{
     echo  "<script> alert('Por favor ingrese todos los campos.') </script>";
     echo "<script>location.href='../views/Admin/modificarUser.php"  ;
    
 }
?>