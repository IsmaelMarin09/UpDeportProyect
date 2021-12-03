<?php


    require_once("../Model/conexion.php");
    require_once("../Model/consultasE.php");
    
    $numero=mt_rand(100000000,999999999);
    $nombre=$_POST["nombre"];
    $email=$_POST['email'];
    $clave=$_POST['clave'];
    $municipio=$_POST['municipio'];
    $fNacimiento=$_POST['fNacimiento'];
    $genero=$_POST['genero'];
    $deporte=$_POST['deporte'];
    $rol=$_POST['rol'];
    

  
    $objetoConsultas = new consultasE();
    $verifC= $objetoConsultas->validaciones($email,"email");
    $verifN= $objetoConsultas->validaciones($numero,"unique_Id");
    if (isset($verifC)) {
        echo "<script type='text/javascript'>alert('Email ya registrado.');</script>";
        echo"<script> window.location.replace('../views/Extras/register.php'); </script>";
    }else {
        if (isset($verifN)) {
            $numero=mt_rand(100000000,999999999);
        }else{

            if ($rol=="Hunter") {
                $estado="Inhabilitado"; 
                if ($_FILES['cc']["error"] >0 or  $_FILES['hv']["error"] >0 or $_FILES['cl']["error"] > 0 ){
                    echo "<script type='text/javascript'>alert('Cargue todos los campos');</script>";
                    echo"<script> window.location.replace('../views/Extras/register.php'); </script>";
                }else {
                    
                    define('ARREGLOH', serialize(array('application/pdf')));
                    $PERMITIDOS2 = unserialize(ARREGLOH);
                    $_FILES['cc']['name']=$numero."cc".".pdf";  
                    $_FILES['hv']['name']=$numero."hv".".pdf";  
                    $_FILES['cl']['name']=$numero."cl".".pdf";  
                    if (in_array($_FILES['cc']['type'], $PERMITIDOS2)&& in_array($_FILES['hv']['type'], $PERMITIDOS2)&& in_array($_FILES['cl']['type'], $PERMITIDOS2) ) {
                        $imagencc = "../views/Assets/img/documentos_hunters/" . $_FILES['cc']['name'];
                        $imagenhv = "../views/Assets/img/documentos_hunters/" . $_FILES['hv']['name'];
                        $imagencl = "../views/Assets/img/documentos_hunters/" . $_FILES['cl']['name'];
                        if (!file_exists($imagencc) && !file_exists($imagenhv) && !file_exists($imagencl)) {
                            $cc = move_uploaded_file($_FILES["cc"]["tmp_name"], $imagencc); 
                            $cc = $_FILES['cc']['name']; 
                            $hv = move_uploaded_file($_FILES["hv"]["tmp_name"], $imagenhv); 
                            $hv = $_FILES['hv']['name']; 
                            $cl = move_uploaded_file($_FILES["cl"]["tmp_name"], $imagencl); 
                            $cl = $_FILES['cl']['name'];   
                            $estado="Inactivo";
                             
                              
        
                        }else {
                            echo "<script type='text/javascript'>alert('Error documentación ya enviada.');</script>";
                            echo"<script> window.location.replace('../views/Extras/register.php'); </script>";
                        }
                    }else{
                        echo "<script type='text/javascript'>alert('Todos los archivos deben ser pdf.');</script>";
                    echo"<script> window.location.replace('../views/Extras/register.php'); </script>";
                    }
                }
            }else {
                
                $estado="Habilitado"; 
            }
        
            
              
                define('LIMITE', 2000);
                define('ARREGLO', serialize(array('image/jpg', 'image/png', 'image/gif', 'image/jpeg')));
                $PERMITIDOS = unserialize(ARREGLO);
                if ($_FILES['imagen']["error"] > 0) {
                    $new_img_name = "user.jpg";
                }else { 
                    $_FILES['imagen']['name']=$numero.".jpg";  
                    if (in_array($_FILES['imagen']['type'], $PERMITIDOS) ) {
                        $imagen = "../views/Assets/img/perfil_img/" . $_FILES['imagen']['name'];
                        if (!file_exists($imagen)) {
                            $new_img_name = move_uploaded_file($_FILES["imagen"]["tmp_name"], $imagen); 
                            $new_img_name = $_FILES['imagen']['name'];                
                        }
                    }else{
                        echo "error araid"; 
                    }
                }
                $clavemd=md5($clave);
                $objetoConsultas = new consultasE();
                $result = $objetoConsultas->registraUsersE($numero, $nombre, $email, $clavemd, $new_img_name, $rol, $deporte, $fNacimiento, $municipio, $genero, $estado);
                $result2 = $objetoConsultas->crearUser2($numero);
                $result3= $objetoConsultas->insertEstadisticas($numero);
               
                if ($rol=="Hunter") {
                    $soliHunter = $objetoConsultas->soliHunter($numero,$cc,$hv,$cl);
                }
                echo "<script type='text/javascript'>alert('Usuario creado con exito');</script>";
                echo"<script> window.location.replace('../views/Extras/login.php'); </script>";
            
        }
        
    }


?>    
    

        





