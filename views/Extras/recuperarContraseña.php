<?php
 require_once('../../Model/conexion.php');
 require_once('../../Model/consutasAdmin.php');
 


 $email = $_POST["email"];

 if (strlen($email)>0 ) {
     
    $objetoConsultas= new consultasAdmin();
    $result =$objetoConsultas->recuperarContraseña($email);
    
   
    
 }else{
     echo  "<script> alert('Por favor ingrese todos los campos') </script>";
    //  echo "<script>location.href='../views/Admin/modificarUser.php"  ;
    
 }
?>