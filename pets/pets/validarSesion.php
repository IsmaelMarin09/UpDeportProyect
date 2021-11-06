<?php
    $email=$_POST['email'];
    $clave=$_POST['clave'];
    
    require("conexion.php");
    $consulta="SELECT * FROM  users WHERE email='$email'";
    $resultado= $mysqli -> query($consulta);
    // se valido el correo, si no funciona no hay arreglo
    if ($arreglo=mysqli_fetch_array($resultado)) {
        if ($clave==$arreglo['clave']) {
            session_start();
            // para inicios de seion fotos etc
            $_SESSION['id']=$arreglo['id'];
            if ("Administrador"==$arreglo['rol']) {
                echo '<script>alert("Usted es Administrador")</script>';
            }
            else{
                echo'<script>alert("Usted es Comprador")</script>';
            }
 
            echo "<script>location.href='dashboard.php'</script>";
             
         }
         else{
             echo '<script>alert("Clave de usuario Incorrecta")</script>';
             echo "<script>location.href='index.php'</script>";
         }
    

        

        
        
    }else{
        echo '<script>alert("Datos de usuario Incorrectos")</script>';
        echo "<script>location.href='index.php'</script>";
    }


?>