<?php
require_once("conexion.php");
 class consultasAsideUsuarios{ 

      public function listarUserAside($id){
        $f=null;
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $listar="SELECT * FROM  users WHERE id=:id";
        $statement=$conexion->prepare ($listar);
        $statement ->bindParam(':id',$id);
        $statement ->execute();
        while ($resultado=$statement->fetch()) {
            $f[]=$resultado;           
        }
        return $f;



     }
     
         

    }
   



?>