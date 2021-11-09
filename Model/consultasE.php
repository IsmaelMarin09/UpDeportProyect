<?php


class consultasE {

        public function registraUsersE($nombre, $email, $clavemd, $municipio, $fNacimiento, $genero, $deporte, $rol, $estado){

        $objetoconexion = new conexion ();    
        $conexion = $objetoconexion->get_conexion();

        $consulta = "SELECT * FROM usersr WHERE email=:email ";
        $result = $conexion->prepare($consulta);
        $result->bindParam(':email', $email);

        $result->execute(); 

        $array = $result->fetch(); 
    
        if ($array  ) {
            echo '<script>alert("Su email ya esta registrado , Porfavor verifique su información")</script>';
            echo "<script>location.href='../views/extras/register.php'</script>";
        }
        else {
            $objetoconexion = new conexion ();    
            $conexion = $objetoconexion->get_conexion();

            $insertarUser = "INSERT INTO usersr (nombre, email, clave, municipio, fNacimiento, genero, deporte, rol, estado) 
            values (:nombre, :email, :clavemd, :municipio, :fNacimiento, :genero, :deporte, :rol, :estado)"; 
            $statement = $conexion->prepare($insertarUser); 
            $statement->bindParam(':nombre', $nombre);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':clave', $clavemd);
            $statement->bindParam(':municipio', $municipio);
            $statement->bindParam(':fNacimiento', $fNacimiento);
            $statement->bindParam(':genero', $genero);
            $statement->bindParam(':deporte', $deporte);
            $statement->bindParam(':rol', $rol);
            $statement->bindParam(':estado', $estado); 
            if (!$statement) {
                echo '<script>alert("Error en los datos del sistema ")</script>';
                echo "<script>location.href='../views/extras/register.php'</script>";
            }else{
                $statement->execute ();
                echo '<script>alert("Usuario registrado con exito")</script>';
                echo "<script>location.href='../views/extras/login.php'</script>";
            }
        }

    }

}


 





