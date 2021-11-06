<?php
require_once("conexion.php");
 class consultasAdmin{
     public function listarUsers(){
         $f=null;

         $objetoConexion= new conexion();
         $conexion=$objetoConexion->get_conexion();


         $listar="SELECT * FROM  users";
         $statement=$conexion->prepare ($listar);
         $statement ->execute();

         while ($resultado=$statement->fetch()) {
             $f[]=$resultado;
         }
         return $f;



     }
     public function actualizarrUsers(){
         

    }
    public function eliminarUsers(){
         

    }



 }




?>