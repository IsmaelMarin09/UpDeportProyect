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
     public function listarUser($id_modificar){     
        $f=null;
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $listar="SELECT * FROM  users WHERE id=:id_modificar";
        $statement=$conexion->prepare ($listar);
        $statement ->bindParam(':id_modificar',$id_modificar);
        $statement ->execute();
        while ($resultado=$statement->fetch()) {
            $f[]=$resultado;           
        }
        return $f;

    }
     public function actualizarrUsers($id, $unique_id,$nombre,$email,$rol,$deporte,$fNacimiento,$municipio,$genero,$estado){
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $actualizar= "UPDATE users SET id=:id, unique_id=:unique_id, nombre=:nombre,email=:email,clave=:clave,rol=:rol,deporte=:deporte,fNacimiento=:fNacimineto, municipio=:municipio, genero=:genero,estado=:estado WHERE id=:id";
        $statement= $conexion->prepare($actualizar);
        $statement->bindParam(':id',$id);
        $statement->bindParam(':unique_id',$unique_id);
        $statement->bindParam(':nombre',$nombre);
        $statement->bindParam(':email',$email);
        $statement->bindParam(':rol',$rol);
        $statement->bindParam(':deporte',$deporte);
        $statement->bindParam(':fNacimiento',$fNacimiento);
        $statement->bindParam(':municipio',$municipio);
        $statement->bindParam(':genero',$genero);
        $statement->bindParam(':estado',$estado);
        
        if (!$statement) {
            echo '<script>alert("ERRORRRR") </script>';
        }else
        echo "<script>alert('USUARIO ACTUALIZADO')  </script> ";
        echo "<script>location.href='../views/Admin/modificarUser.php </script>" ;
    }
    public function eliminarUsers(){
         

    }



 }




?>