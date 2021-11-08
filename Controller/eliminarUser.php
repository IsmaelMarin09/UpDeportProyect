<?php
   
   require_once('../Model/conexion.php');
   require_once('../Model/consutasAdmin.php');
    if(isset($_GET['id_eliminar'])){
        $id_eliminar=$_GET['id_eliminar'];
        $consultas= new  consultasAdmin();
        $mensaje=$consultas->eliminarUser($id_eliminar);
        
        echo "<script>location.href='../views/Admin/data.php'</script>";

    }

    

	
?>