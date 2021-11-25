<?php
   
   require_once('../Model/conexion.php');
   require_once('../Model/consutasAdmin.php');
    if(isset($_GET['id_eliminar'])){
        $id=$_GET['id_eliminar'];
        $consultas= new  consultasAdmin();
        $mensaje=$consultas->eliminarPublicacion($id,"publicaciones");
        
        
        echo "<script>location.href='../views/Admin/listaPublicaciones.php'</script>";

    }

    

	
?>