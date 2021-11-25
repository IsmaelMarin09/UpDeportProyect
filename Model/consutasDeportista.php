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
    public function insertarPublicacion($unique_Id, $descripcion, $descripcionV, $img1, $img2, $img3, $estado){
       
        
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $likes=0;
        $sql="insert into publicaciones (unique_Id,descripcion,des_Video,img1,img2,img3,likes,estado) values(:unique_Id,:descripcion,:des_Video,:img1,:img2,:img3,:likes,:estado)";
        $statement =$conexion->prepare($sql);
        $statement-> bindParam(':unique_Id', $unique_Id);
        $statement-> bindParam(':descripcion', $descripcion);
        $statement-> bindParam(':des_Video', $descripcionV);
        $statement-> bindParam(':img1', $img1);
        $statement-> bindParam(':img2', $img2);
        $statement-> bindParam(':img3', $img3);
        $statement->bindParam(':likes', $likes);
        $statement-> bindParam(':estado', $estado);
        

        if (!$statement) {
            $mensaje="Error al crear publicaión";
            return $mensaje ;
             
        }else{
            $statement-> execute();
            $mensaje= "se creo la publicación con exito";
            return $mensaje ;
        

        }}
        public function actualizarEstadisticas($id,$resistencia, $fuerza,$velocidad,$flexibilidad,$coordinacion,$equilibrio,$agilidad,$reaccion){

            $objetoConexion=new conexion();
            $conexion=$objetoConexion->get_conexion();
            $actualizar= "UPDATE estadisticas1 SET  id=:id,resistencia=:resistencia, fuerza=:fuerza, velocidad=:velocidad, flexibilidad=:flexibilidad, coordinacion=:coordinacion, equilibrio=:equilibrio, agilidad=:agilidad, reaccion=:reaccion WHERE id=:id";
            $statement= $conexion->prepare($actualizar); 
            $statement->bindParam(':id', $id);
            $statement->bindParam(':resistencia', $resistencia);
            $statement->bindParam(':fuerza', $fuerza);
            $statement->bindParam(':velocidad', $velocidad);
            $statement->bindParam(':flexibilidad', $flexibilidad);
            $statement->bindParam(':coordinacion', $coordinacion);
            $statement->bindParam(':equilibrio', $equilibrio);
            $statement->bindParam(':agilidad', $agilidad);
            $statement->bindParam(':municipio', $municipio);
            $statement->bindParam(':reaccion', $reaccion);
            
            $statement->execute(); 
            
            if (!$statement) {
                echo '<script>alert("puta erro") </script>';
        }else{
            echo "<script>alert('ESTADISTICAS ACTUL')</script> ";
            echo "<script>location.href='../views/Admin/profileMod.php '</script>" ;
        }
        }
    public function listarEstadisticas ($id){
        $objetoConexion= new conexion();
        $conexion=$objetoConexion ->get_conexion();
        $query="SELECT * FROM estadisticas1 WHERE unique_Id=:id";
        $statement=$conexion->prepare($query);
        $statement->bindParam(':id',$id);
        $statement->execute();
        while ($resultado=$statement->fetch()) {
            $f[]=$resultado;           
        }
        return $f;
      
        
    }
    public function listarPublicaciones(){
        $f=null;
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $listar="SELECT * FROM publicaciones";
        $statement=$conexion->prepare($listar);
        $statement->execute();
        while ($resultado=$statement->fetch()) {
            $f[]=$resultado;
        }
        return $f;
        

    } 
    
    public function verificacionLike($id1,$id2){
        $estado=null;
        $f=null;
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $listar="SELECT * FROM  tablalikes WHERE unique_idA=:id1";
        $statement=$conexion->prepare ($listar);
        $statement ->bindParam(':id1',$id1);
        $statement ->execute();       
        while ($resultado=$statement->fetch()) {
            $f[]=$resultado;           
        }
        if (isset($f)) {
            foreach($f as $f1 ){
                if ($f1['idP'] == $id2) {
                    $estado= "Ya no me gusta";
                    break;
                }
                else{        
                    $estado="Me gusta";         
                }
             }
        }else {$estado= "Me gusta";
        }
        return $estado ;
    }
    public function insertarDenuncias($unique_IdS,$unique_IdD,$tipo,$descripcion,$IdP,$estado){

        $objetoConexion = new conexion();
        $conexion= $objetoConexion ->get_conexion();
        $query="INSERT INTO denuncias (unique_IdS,unique_IdD,IdP,tipo,descripcion,estado) VALUES (:unique_IdS,:unique_IdD,:IdP,:tipo,:descripcion,:estado)";
        $statement=$conexion->prepare($query);
        $statement->bindParam(':unique_IdS', $unique_IdS);
        $statement->bindParam(':unique_IdD',$unique_IdD);
        $statement->bindParam(':IdP',$IdP);
        $statement->bindParam(':tipo',$tipo);
        $statement->bindParam(':descripcion',$descripcion);
        $statement->bindParam(':estado',$estado);
        if(!$statement){
            $mensaje="Error la insertar";
            return $mensaje;

        }else{
            $statement->execute();
            $mensaje="Se inserto los datos con exito";
            return $mensaje;
        }
    } 
    public function eliminarPublicacion($id,$db){
        $modelo= new Conexion();
        $conexion= $modelo->get_conexion();
        $sql="delete from $db where id=:id";
        $statement= $conexion-> prepare($sql);
        $statement-> bindParam(':id',$id);
        if(!$statement){ 
            return"Error al eliminar Publicacion";
        }else{
            $statement->execute(); 
            return "Publicacion eliminado correctamente";           
            }
    }
    


















}




?>