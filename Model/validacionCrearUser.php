<?php 

require_once ("conexion.php");
require_once ("consutasAdmin.php");

$fUser="user.jpg";
$numero=mt_rand(100000000,999999999);
$mensaje=null;
$nombre= $_POST['nombre'];
$rol= $_POST['rol'];
$email= $_POST['email'];
$deporte= $_POST['deporte'];
$estado= $_POST['estado'];
$municipio= $_POST['municipio'];
$fNacimiento= $_POST['fNacimiento'];
$genero= $_POST['genero'];
if((strlen($nombre)>0) && (strlen($email)>0)&&  strlen($deporte)>0 && strlen($deporte)>0 && strlen($municipio)>0 && strlen($fNacimiento)>0 && strlen($genero)>0){
    $consultas= new consultasAdmin();
    $mensaje= $consultas->crearUser($numero,$nombre,$email,$fUser,$rol,$deporte,$fNacimiento,$municipio,$genero,$estado);
    $mensaje2= $consultas->crearUser2($numero);

    echo "<script type='text/javascript'>alert('$mensaje');window.location.href ='../views/Admin/crearUser.php'</script>";

}else{
    echo "Por favor completa todos los campos";
}
 
    
   
   

    

      

        
    
 
?>
