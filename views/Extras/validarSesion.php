<?php

    $correo=$_POST['correo'];
    $clave=$_POST['clave'];

    
   
    require("../../controller/conexion.php");
    $consulta="SELECT * FROM  users WHERE correo='$correo'";
    $resultado= $mysqli -> query($consulta);
    // se valido el correo, si no funciona no hay arreglo
    if ($arreglo=mysqli_fetch_array($resultado)) {
        if ($clave==$arreglo['clave']) {
            session_start();
            // para inicios de seion fotos etc
            $_SESSION['id']=$arreglo['id'];
            if ("Deportista"==$arreglo['rol']) {
                echo '<script>alert("Usted es deportista")</script>';
            }
            else{
                echo'<script>alert("Usted es entrenador")</script>';
            }
            echo "<script>location.href='../Admin/index.php'</script>";

 
            //echo "<script>location.href='../Dashboard/pages/examples/profile.html'</script>";
             
         }
         else{
             echo '<script>alert("Clave de usuario Incorrecta")</script>';
             echo "<script>location.href='login.php'</script>";
         }
    

        

        
        
    }else{
        echo '<script>alert("Datos de usuario Incorrectos")</script>';
        echo "<script>location.href='login.php'</script>";
    }


?>