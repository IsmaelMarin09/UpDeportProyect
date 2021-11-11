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
}


 





