<?php


class consultasE {

        public function registraUsersE($unique_Id, $nombre, $email, $clavemd, $img, $rol, $deporte, $fNacimiento, $municipio, $genero, $estado){
        $objetoconexion = new conexion ();    
        $conexion = $objetoconexion->get_conexion();
        $consulta = "SELECT * FROM users WHERE email=:email";
        $result = $conexion->prepare($consulta);
        $result->bindParam(':email',$email);
        $result->execute(); 
        $array = $result->fetch(); 
        if ($array) {
            echo '<script>alert("Su email ya esta registrado , Porfavor verifique su información")</script>';
            echo "<script>location.href='../views/extras/register.php'</script>";
        }
        else {
            $objetoConexion=new conexion();
            $conexion=$objetoConexion->get_conexion();
            $sql="insert into users (unique_Id,nombre,email,clave,img,rol,deporte,fNacimiento,municipio,genero,estado) values(:unique_Id,:nombre,:email,:clave,:img,:rol,:deporte,:fNacimiento,:municipio,:genero,:estado)";
            $statement =$conexion->prepare($sql);
            $statement-> bindParam(':unique_Id', $unique_Id);
            $statement-> bindParam(':nombre', $nombre);
            $statement-> bindParam(':email', $email);
            $statement-> bindParam(':clave', $clavemd);
            $statement-> bindParam(':img', $img);
            $statement-> bindParam(':rol', $rol);
            $statement-> bindParam(':deporte', $deporte);
            $statement-> bindParam(':fNacimiento', $fNacimiento);
            $statement-> bindParam(':municipio', $municipio);
            $statement-> bindParam(':genero', $genero);
            $statement-> bindParam(':estado', $estado); 
            if (!$statement) {
                echo '<script>alert("Error en los datos del sistema ")</script>';
                echo "<script>location.href='../views/extras/register.php'</script>";
            }else{
                $statement->execute();
                echo '<script>alert("Usuario registrado con exito")</script>';
                echo "<script>location.href='../views/extras/login.php'</script>";
            }
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
public function validaciones($valor,$column){
    $f=null;
    $objetoConexion=new conexion();
    $conexion=$objetoConexion->get_conexion();
    $listar="SELECT * FROM  users WHERE $column=:correo";
    $statement=$conexion->prepare ($listar);
    $statement ->bindParam(':correo',$valor);
    $statement ->execute();   
    while ($resultado=$statement->fetch()) {
        $f[]=$resultado;         
   }return $f;  


}
public function soliHunter($unique_Id,$cedula,$hojaDeVida,$certificacionLaboral){
    
    $resistencia=10;
    $fuerza=9;
    $velocidad=8;
    $flexibilidad=7;
    $coordinacion=6;
    $equilibrio=5;
    $agilidad=4;
    $reaccion=3;
    $estado="En espera";
    $objetoConexion=new conexion();
    $conexion=$objetoConexion->get_conexion();
    $sql="insert into documentosHunters (unique_Id,cedula,hojaDeVida,certificacionLaboral,estado) values(:unique_Id,:cedula,:hojaDeVida,:certificacionLaboral,:estado)";
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
public function insertEstadisticas($unique_Id){
    $resistencia=10;
    $fuerza=9;
    $velocidad=8;
    $flexibilidad=7;
    $coordinacion=6;
    $equilibrio=5;
    $agilidad=4;
    $reaccion=3;
    $objetoConexion=new conexion();
    
    $conexion=$objetoConexion->get_conexion();
    $sql="INSERT INTO  estadisticas1 (unique_Id,resistencia,fuerza, velocidad,flexibilidad,coordinacion,equilibrio,agilidad,reaccion) values(:unique_Id,:resistencia,:fuerza,:velocidad,:flexibilidad,:coordinacion,:equilibrio,:agilidad,:reaccion)";
    $statement =$conexion->prepare($sql);
    $statement-> bindParam(':unique_Id', $unique_Id);
    $statement-> bindParam(':resistencia', $resistencia);
    $statement-> bindParam(':fuerza', $fuerza);
    $statement-> bindParam(':velocidad', $velocidad);
    $statement-> bindParam(':flexibilidad', $flexibilidad);
    $statement-> bindParam(':coordinacion', $coordinacion);
    $statement-> bindParam(':equilibrio', $equilibrio);
    $statement-> bindParam(':agilidad', $agilidad);
    $statement-> bindParam(':reaccion', $reaccion);
    if (!$statement) {
        $mensaje="Error al insertar los datos de las estadisticas ";
             
    }else{
        $statement-> execute();
        $mensaje= "Se añadio los datos correctamente";
      
    }

}
}


 





