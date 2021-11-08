<?php
require_once("conexion.php");

 class consultasAsideUsuarios{ 

        public function listarUserAside($id_user){
         
        $f=null;
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $listar="SELECT * FROM  users WHERE unique_Id=:id_user";
        $statement=$conexion->prepare ($listar);
        $statement ->bindParam(':id_user',$id_user);
        $statement ->execute();
          
        while ($resultado=$statement->fetch()) {
            $f[]=$resultado;  
           
        }

        return $f;



     }
     
         

    }
   



?>