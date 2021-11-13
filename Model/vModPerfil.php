<?php 

require_once ("conexion.php");
require_once ("consutasAdmin.php");
$unique_Id= $_POST['idEnviar'];
$desarrollo= $_POST['desarrollo'];
$municipio= $_POST['municipio'];
$reconocimientos= $_POST['reconocimientos'];
$descripcion= $_POST['descripcion'];

if((strlen($unique_Id)>0) && (strlen($desarrollo)>0)&&  strlen($municipio)>0 && strlen($reconocimientos)>0 && strlen($descripcion)>0){
    $consultas= new consultasAdmin();
    $mensaje= $consultas->ModInfoPerfil("desarrollo",$desarrollo,$unique_Id,"tablaprofile");
    $mensaje= $consultas->ModInfoPerfil("municipio",$municipio,$unique_Id,"users");
    $mensaje= $consultas->ModInfoPerfil("reconocimientos",$reconocimientos,$unique_Id,"tablaprofile");
    $mensaje= $consultas->ModInfoPerfil("descripcion",$descripcion,$unique_Id,"tablaprofile");
  
    
    echo "<script type='text/javascript'>window.location.href ='../views/Admin/profile.php'</script>";

}else{
    echo "Por favor completa todos los campos";
}
 
    
   
   

    

      

        
    
 
?>
