<?php 

require_once ("conexion.php");
require_once ("consutasAdmin.php");
$consultas= new consultasAdmin();

$unique_Id= $_POST['idEnviar'];
$desarrollo= $_POST['desarrollo'];
$municipio= $_POST['municipio'];
$reconocimientos= $_POST['reconocimientos'];
$descripcion= $_POST['descripcion'];
$infoComparar= $consultas->selecUserP($unique_Id,"users");
define('LIMITE', 2000);
define('ARREGLO', serialize(array('image/jpg', 'image/png', 'image/gif', 'image/jpeg')));
$PERMITIDOS = unserialize(ARREGLO);
function traerImg($infoComparar){
    foreach ($infoComparar as $f) {
        $new_img_name1 = $f['img'];
        return  $new_img_name1;
    }
}
$traerImg=traerImg($infoComparar);

if ($_FILES['imagen']["error"] > 0) {

    $new_img_name = $traerImg;
    
   
}else { 
    $_FILES['imagen']['name']=$unique_Id.".jpg";
    if ($traerImg=="user.jpg") {
        $new_img_name = $traerImg;    
    }
        if (in_array($_FILES['imagen']['type'], $PERMITIDOS) ) {
            $imagen = "../views/Assets/img/perfil_img/" . $_FILES['imagen']['name'];
            unlink("../views/Assets/img/perfil_img/".$_FILES['imagen']['name']);
            if (!file_exists($imagen)) {
                $new_img_name = move_uploaded_file($_FILES["imagen"]["tmp_name"], $imagen); 
                $new_img_name = $_FILES['imagen']['name'];}
        }else{echo "error araid";
            $new_img_name = $traerImg;
        }
       
      
    
    
    
    
}

if((strlen($unique_Id)>0) && (strlen($desarrollo)>0)&&  strlen($municipio)>0 && strlen($reconocimientos)>0 && strlen($descripcion)>0){
    
    $mensaje= $consultas->ModInfoPerfil("desarrollo",$desarrollo,$unique_Id,"tablaprofile");
    $mensaje= $consultas->ModInfoPerfil("municipio",$municipio,$unique_Id,"users");
    $mensaje= $consultas->ModInfoPerfil("img",$new_img_name,$unique_Id,"users");
    $mensaje= $consultas->ModInfoPerfil("reconocimientos",$reconocimientos,$unique_Id,"tablaprofile");
    $mensaje= $consultas->ModInfoPerfil("descripcion",$descripcion,$unique_Id,"tablaprofile");
  
    
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

}else{
    echo "Por favor completa todos los campos";
}
 
    
   
   

    

      

        
    
 
?>
