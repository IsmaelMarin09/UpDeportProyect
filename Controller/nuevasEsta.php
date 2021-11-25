<?php
 require_once('../Model/conexion.php');
 require_once('../Model/consutasAdmin.php');
 

 $id=$_POST["id"];
 $resistencia = $_POST["resistencia"];
 $fuerza= $_POST["fuerza"];
 $velocidad= $_POST["velocidad"];
 $flexibilidad= $_POST["flexibilidad"];
 $coordinacion= $_POST["coordinacion"];
 $equilibrio= $_POST["equilibrio"];
 $agilidad= $_POST["agilidad"];
 $reaccion= $_POST["reaccion"];
 
 if (strlen($id)>0 && strlen($resistencia)>0 && strlen($fuerza)>0 && strlen($velocidad)>0 && strlen($flexibilidad)>0 && strlen($coordinacion)>0 && strlen($equilibrio)>0 && strlen($agilidad)>0 && strlen($reaccion)>0  ) {
     
    $objetoConsultas= new consultasAdmin();
    $result =$objetoConsultas->actualizarEstadisticas($id,$resistencia, $fuerza,$velocidad,$flexibilidad,$coordinacion,$equilibrio,$agilidad,$reaccion);
    
 }else{

     
     session_start();
     if ($_SESSION['rol']=="Administrador") {
         echo "<script type='text/javascript'>window.location.href ='../views/Admin/profile.php'</script>";
     }
     if ($_SESSION['rol']=="Hunter") {
         echo "<script type='text/javascript'>window.location.href ='../views/Hunter/profile.php'</script>";
     }
     if ($_SESSION['rol']=="Deportista") {
         echo "<script type='text/javascript'>window.location.href ='../views/Deportista/profile.php'</script>";
     } 
 }
?>