<?php

    require_once("../../Model/conexion.php");
    $correo=$_POST['correo'];
    $clave=$_POST['clave'];
    $clavemd=md5($clave);
    $f=null;
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $listar="SELECT * FROM  users WHERE email=:correo";
        $statement=$conexion->prepare ($listar);
        $statement ->bindParam(':correo',$correo);
        $statement ->execute();        
        while ($resultado=$statement->fetch()) {
            $f[]=$resultado;         
        }if (isset($f)) {
            foreach($f as $f1){
                if ($f1['clave']==$clavemd) {
                    $estado=1;
                    break;
                }else{
                    $estado=0;
                }
            }if ($estado==1) {
                session_start();
                $_SESSION['unique_Id']=$f1['unique_Id'];
                echo "<script>location.href='../Admin/profile.php'</script>";
                
            }else {
                echo '<script>alert("Clave de usuario Incorrecta")</script>';
                echo "<script>location.href='login.php'</script>";
            }
        }else {
            echo '<script>alert("correo de usuario Incorrecto")</script>';
            echo "<script>location.href='login.php'</script>";
        }
        

    

    







    //require ("../../Model/conexion.php");
    //$consulta="SELECT * FROM  users WHERE correo='$correo'";
    //$objetoConexion=new conexion();
    //$conexion=$objetoConexion->get_conexion();
    // se valido el correo, si no funciona no hay arreglo
    //if ($arreglo=mysqli_fetch_array($conexion)) {
        //if ($clave==$arreglo['clave']) {
            //session_start();
            // para inicios de seion fotos etc
            //$_SESSION['id']=$arreglo['id'];
            //if ("Deportista"==$arreglo['rol']) {
                //echo '<script>alert("Usted es deportista")</script>';
            //}
            //else{
                //echo'<script>alert("Usted es entrenador")</script>';
            //}
            //echo "<script>location.href='../Admin/index.php'</script>";

 
            
             
         //}
         //else{
             //echo '<script>alert("Clave de usuario Incorrecta")</script>';
             //echo "<script>location.href='login.php'</script>";
         //}
    

        

        
        
    //}else{
        //echo '<script>alert("Datos de usuario Incorrectos")</script>';
        //echo "<script>location.href='login.php'</script>";
    //}


?>