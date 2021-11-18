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
        $actualizar= "UPDATE users SET id=:id, unique_Id=:unique_id, nombre=:nombre, email=:email, clave=:clave, rol=:rol, deporte=:deporte, fNacimiento=:fNacimiento, municipio=:municipio, genero=:genero, estado=:estado WHERE id=:id";
        $statement= $conexion->prepare($actualizar); 
        $statement->bindParam(':id', $id);
        $statement->bindParam(':unique_id', $unique_id);
        $statement->bindParam(':nombre', $nombre);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':rol', $rol);
        $statement->bindParam(':deporte', $deporte);
        $statement->bindParam(':fNacimiento', $fNacimiento);
        $statement->bindParam(':municipio', $municipio);
        $statement->bindParam(':genero', $genero);
        $statement->bindParam(':estado', $estado);
        $statement->execute(); 
        
        if (!$statement) {
            echo '<script>alert("ERRORRRR") </script>';
    }else{
        echo "<script>alert('USUARIO ACTUALIZADO')</script> ";
        echo "<script>location.href='../views/Admin/data.php '</script>" ;
    }
    }
    public function eliminarUser($unique_Id,$db){
        $modelo= new Conexion();
        $conexion= $modelo->get_conexion();
        $sql="delete from $db where unique_Id=:unique_Id";
        $statement= $conexion-> prepare($sql);
        $statement-> bindParam(':unique_Id',$unique_Id);
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
        $claveSMd="12345";
        $clave=md5($claveSMd);
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
    public function crearUser2($unique_Id){
        $seguidores="0";
        $seguidos="0";
        $desarrollo="Escribe sobre tu desarrollo";
        $reconocimientos="Relaciona acá tus reconocimientos";
        $descripcion="Escribe acá una pequeña descripción para que todos puedan conocerte";
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $sql="insert into tablaprofile (unique_Id,seguidores,seguidos,desarrollo,reconocimientos,descripcion) values(:unique_Id,:seguidores,:seguidos,:desarrollo,:reconocimientos,:descripcion)";
        $statement =$conexion->prepare($sql);
        $statement-> bindParam(':unique_Id', $unique_Id);
        $statement-> bindParam(':seguidores', $seguidores);
        $statement-> bindParam(':seguidos', $seguidos);
        $statement-> bindParam(':desarrollo', $desarrollo);
        $statement-> bindParam(':reconocimientos', $reconocimientos);
        $statement-> bindParam(':descripcion', $descripcion);
        if (!$statement) {
            $mensaje="Error en crear el registro";
            return $mensaje ;         
        }else{
            $statement-> execute();
            $mensaje= "Se creo el registro con exito";
            return $mensaje ;
        }
    }
    //Para todos los usuarios; funcion para verificar si se esta siguiendo o no a la persona
    public function verificacionSeg($id1,$id2){
        $estado=null;
        $f=null;
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $listar="SELECT * FROM  tablaseguimiento WHERE unique_idA=:id1";
        $statement=$conexion->prepare ($listar);
        $statement ->bindParam(':id1',$id1);
        $statement ->execute();       
        while ($resultado=$statement->fetch()) {
            $f[]=$resultado;           
        }
        if (isset($f)) {
            foreach($f as $f1 ){
                if ($f1['unique_IdB'] == $id2) {
                    $estado= "Dejar de seguir";
                    break;
                }
                else{        
                    $estado="Seguir";         
                }
             }
        }else {$estado= "Seguir";
        }
        return $estado ;
        




    }
    public function ModInfoPerfil($arg_campo,$desarrollo,$unique_Id,$db){
        $objetoConexion2=new conexion();
        $conexion3=$objetoConexion2->get_conexion();
        $sql="update $db set $arg_campo =:valor where unique_Id =:unique_Id";
        $stm = $conexion3->prepare($sql);
        $stm->bindParam(":valor",$desarrollo);
        $stm->bindParam(":unique_Id",$unique_Id);
        if (!$stm) {
            $msk= "Error al modificar campo";
        }else{
            $stm->execute();   
           
        }
    }
    public function listarTablas($db){     
        $objetoConexion= new conexion();
        $conexion=$objetoConexion->get_conexion();
        $listar="SELECT * FROM  $db";
        $statement=$conexion->prepare ($listar);
        $statement ->execute();
        while ($resultado=$statement->fetch()) {
            $f[]=$resultado;           
        }
        return $f;
    }
    public function consultasBusqueda($buscar){
        $f=null;
        $objetoConexion= new conexion();
        $conexion=$objetoConexion->get_conexion();
        $listar="SELECT * FROM users WHERE nombre LIKE LOWER('%".$buscar."%') OR deporte LIKE LOWER ('%".$buscar."%') OR rol LIKE LOWER ('%".$buscar."%') "; 
        $statement=$conexion->prepare ($listar);
        $statement ->execute();
        while ($resultado=$statement->fetch()) {
            $f[]=$resultado;           
        } 
        return $f;

    }






}
        





 




?>