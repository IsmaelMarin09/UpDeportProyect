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
        $actualizar= "UPDATE users SET id=:id, unique_Id=:unique_id, nombre=:nombre, email=:email, rol=:rol, deporte=:deporte, fNacimiento=:fNacimiento, municipio=:municipio, genero=:genero, estado=:estado WHERE id=:id";
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
        $reconocimientos="Relaciona ac?? tus reconocimientos";
        $descripcion="Escribe ac?? una peque??a descripci??n para que todos puedan conocerte";
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
            $mensaje="Error al crear publicai??n";
            return $mensaje ;
             
        }else{
            $statement-> execute();
            $mensaje= "se creo la publicaci??n con exito";
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
                echo '<script>alert("Error") </script>';
        }else{
            session_start();
            if ($_SESSION['rol']=="Administrador") {
                echo "<script type='text/javascript'>window.location.href ='../views/Admin/profile.php'</script>";
            }
            if ($_SESSION['rol']=="Hunter") {
                echo "<script type='text/javascript'>window.location.href ='../views/Hunter/profile.php'</script>";
            }
            if ($_SESSION['rol']=="Deportista") {
                echo "<script type='text/javascript'>window.location.href ='../views/Deportista/profile.php'</script>";
            }  ;
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
    public function modSolicitarPqrs($id){
        $estado="Revisado";
        $objetoConexion2=new conexion();
        $conexion3=$objetoConexion2->get_conexion();
        $sql="update denuncias set estado =:estado where id=:id";
        $stm = $conexion3->prepare($sql);
        $stm->bindParam(":estado",$estado);
        $stm->bindParam(":id",$id);
        if (!$stm) {
            $msk= "Error al modificar campo";
        }else{
            $stm->execute();   
           
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
    public function soliHunter($unique_Id,$cedula,$hojaDeVida,$certificacionLaboral){
    
        
        $estado="En espera";
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $sql="insert into documentoshunters (unique_Id,cedula,hojaDeVida,certificacionLaboral,estado) values(:unique_Id,:cedula,:hojaDeVida,:certificacionLaboral,:estado)";
        $statement =$conexion->prepare($sql);
        $statement-> bindParam(':unique_Id', $unique_Id);
        $statement-> bindParam(':cedula', $cedula);
        $statement-> bindParam(':hojaDeVida', $hojaDeVida);
        $statement-> bindParam(':certificacionLaboral', $certificacionLaboral);
        $statement-> bindParam(':estado', $estado);
        if (!$statement) {
            $mensaje="Error en crear el registro";
                 
        }else{
            $statement-> execute();
            $mensaje= "Se creo el registro con exito";
          
        }
       

    
    
    }
    public function recuperarContrase??a($email){
        $objetoConexion= new conexion();
        $conexion= $objetoConexion->get_conexion();
        $query="SELECT email,nombre  FROM users WHERE email=:email";
        $statement= $conexion->prepare($query);
        $statement->bindParam(':email',$email);

        $statement->execute();
        while ($resultado=$statement->fetch()) {
            $f[]=$resultado;
        }
        if (isset($f)) {
            foreach($f as $f1){
                if ($f1['email']==$email) {
                    $numero=1;
                    
                }else{
                    $numero=0;
                }
            }
            if ($numero==1) {
                $token= uniqid();
               
                $sql="UPDATE users SET token =:token WHERE email=:email";
                $statement= $conexion->prepare($sql);
                $statement->bindParam(':email',$email);
                $statement->bindParam(':token',$token);       
                $statement->execute();

                $email_to=$email;
                $email_subject ="Cambio de contrase??a ";
                $email_from="ismaelmarinc12@gmail.com";

                $email_message=" Hola ".$f1['nombre'].", te habla UPDEPORT y solicitaste cambiar tu contrase??a,ingresa al siguiente link  \n\n" ;
                $email_message .="http:// esperar/nuevaContrase??a.php?user=".$f1['nombre']."&token=".$token ;

                $headers= 'From: '.$email_from."\r\n".
                'Reply-To: '.$email_from."\r\n".
                'X-Mailer: PHP/' .phpversion();
                @mail($email_to,$email_subject,$email_message,$headers);

                echo '<script>alert("Te hemos enviado un email para recueperar tu contrase??a") </script>';
                echo "<script>location.href='../Extras/login.php '</script>" ;
            }elseif($numero==0){
                echo '<script>alert("CORREO NO REGISTRADO EN LA PAGINA") </script>';
            }
        }
        

    } }
?>