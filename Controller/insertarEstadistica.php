<?php
 require_once('../../Model/conexion.php');
 require_once('../../Model/consutasAdmin.php');
 



 
 $resistecnia= $_POST["resistencia"];
 $fuerza= $_POST["fuerza"];
 $velocidad= $_POST["velocidad"];
 $flexibilidad= $_POST["flexibilidad"];
 $coordinacion= $_POST["coordinacion"];
 $equilibrio= $_POST["equilibrio"];
 $agilidad= $_POST["agilidad"];
 $reaccion= $_POST["reacccion"];

    if (strlen($unique_Id)>0 && strlen($resistecnia)>0 && strlen($fuerza)>0 && strlen($velocidad)>0  && strlen($flexibilidad)>0 && strlen($coordinacion)>0 && strlen($equilibrio)>0 && strlen($agilidad)>0 && strlen($reaccion)>0) {
     
        $objetoConsultas= new consultasAdmin();
        $result =$objetoConsultas->listarEstadisticas($unique_Id);
        
     }else{
         echo  "<script> alert('Por favor ingrese todos los campos') </script>";
         echo "<script>location.href='../views/Admin/profileMod.php"  ;
        
     }
   


?>