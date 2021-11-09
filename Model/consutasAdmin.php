<?php
require_once("conexion.php");
 class consultasAdmin{
      public function listarUsers(){     
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
    public function eliminarUser($id_eliminar){
        $modelo= new Conexion();
        $conexion= $modelo->get_conexion();
        $sql="delete from users where id=:id_eliminar";
        $statement= $conexion-> prepare($sql);
        $statement-> bindParam(':id_eliminar',$id_eliminar);
        if(!$statement){ 
            return"Error al eliminar usuario";
        }else{
            $statement->execute(); 
            return "Usuario eliminado correctamente";           
            }
    }
    public function selecUser($id_user,$db){      
        $f=null;
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $listar="SELECT * FROM  $db WHERE unique_Id=:id_user";
        $statement=$conexion->prepare ($listar);
        $statement ->bindParam(':id_user',$id_user);
        $statement ->execute();        
        while ($resultado=$statement->fetch()) {
            $f[]=$resultado;         
        }
        return $f;
     }
     public function selecUserP($id_user,$db){       
        $f2=null;
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $listar="SELECT * FROM  $db where unique_Id=:id_user";
        $statement=$conexion->prepare ($listar);
        $statement ->bindParam(':id_user',$id_user);
        $statement ->execute();       
        while ($resultado2=$statement->fetch()) {
            $f2[]=$resultado2;        
        }
        return $f2;
     }
     public function listarSeguidores($id_user,$db,$column){
        $f2=null;
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $listar="SELECT * FROM  $db where $column=:id_user";
        $statement=$conexion->prepare ($listar);
        $statement ->bindParam(':id_user',$id_user);
        $statement ->execute();    
        while ($resultado2=$statement->fetch()) {
            $f2[]=$resultado2;  }
        return $f2;
    }
    public function crearUser($unique_Id,$nombre,$email,$img,$rol,$deporte,$fNacimiento,$municipio,$genero,$estado){
        $clave="12345";
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $sql="insert into users (unique_Id,nombre,email,clave,img,rol,deporte,fNacimiento,municipio,genero,estado) values(:unique_Id,:nombre,:email,:clave,:img,:rol,:deporte,:fNacimiento,:municipio,:genero,:estado)";
        $statement =$conexion->prepare($sql);
        $statement-> bindParam(':unique_Id', $unique_Id);
        $statement-> bindParam(':nombre', $nombre);
        $statement-> bindParam(':email', $email);
        $statement-> bindParam(':clave', $clave);
        $statement-> bindParam(':img', $img);
        $statement-> bindParam(':rol', $rol);
        $statement-> bindParam(':deporte', $deporte);
        $statement-> bindParam(':fNacimiento', $fNacimiento);
        $statement-> bindParam(':municipio', $municipio);
        $statement-> bindParam(':genero', $genero);
        $statement-> bindParam(':estado', $estado);
        

        if (!$statement) {
            $mensaje="Error en crear el registro";
            return $mensaje ;
             
        }else{
            $statement-> execute();
            $mensaje= "Se creo el registro con exito";
            return $mensaje ;
        

        }
    }





}
        





 




?>