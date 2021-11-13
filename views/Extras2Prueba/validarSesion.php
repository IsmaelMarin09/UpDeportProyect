<?php

    $email=$_POST['email'];
    
   

    
   
    require("conexion.php");
    $consulta="SELECT * FROM  users WHERE email='$email'";
    $resultado= $mysqli -> query($consulta);
   
    // se valido el correo, si no funciona no hay arreglo
    if ($arreglo=mysqli_fetch_array($resultado)) {
        session_start();
        $_SESSION['unique_Id']=$arreglo['unique_Id'];
        echo "<script>location.href='../Admin/index.php'</script>"  ;  
          
        
    }else{
        echo '<script>alert("Datos de usuario Incorrectos")</script>';
        echo "<script>location.href='login.php'</script>";
    }


?>