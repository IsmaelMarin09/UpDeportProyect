<?php


    require_once("../Model/conexion.php");
    require_once("../Model/consultasE.php");
    
    $numero=mt_rand(100000000,999999999);
    $nombre=$_POST["nombre"];
    $email=$_POST['email'];
    $clave=$_POST['clave'];
    $municipio=$_POST['municipio'];
    $imagen=$_POST['imagen'];
    $fNacimiento=$_POST['fNacimiento'];
    $genero=$_POST['genero'];
    $deporte=$_POST['deporte'];
    $rol=$_POST['rol'];
    $estado="Habilitado"; 

    if (strlen ($nombre)>0 && strlen ($email)>0 && strlen ($clave)>0 && strlen ($municipio)>0 && strlen ($fNacimiento)>0 && strlen ($genero)>0 && strlen ($deporte)>0 && strlen($rol)>0) {
        if(isset($_FILES['image'])){
            $img_name = $_FILES['image']['name'];
            $img_type = $_FILES['image']['type'];
            $tmp_name = $_FILES['image']['tmp_name'];
            
            $img_explode = explode('.',$img_name);
            $img_ext = end($img_explode);

            $extensions = ["jpeg", "png", "jpg"];
            if(in_array($img_ext, $extensions) === true){
                $types = ["image/jpeg", "image/jpg", "image/png"];
                if(in_array($img_type, $types) === true){
                    $time = time();
                    $new_img_name = $time.$img_name;
                    if(move_uploaded_file($tmp_name,"/views/Assets/img/perfil_img".$new_img_name)){
                    }
                }else{

                }
            }else{
                echo "Please upload an image file - jpeg, png, jpg";
            }
        }
        else{
            $new_img_name="user.jpg";
        }
        $clavemd=md5($clave);
       $objetoConsultas = new consultasE();
       $result = $objetoConsultas->registraUsersE($numero, $nombre, $email, $clavemd, $new_img_name, $rol, $deporte, $fNacimiento, $municipio, $genero, $estado);
       $result2 = $objetoConsultas->crearUser2($numero);
    }else {
        echo '<script>alert("porfavor llene todos los campos del formulario")</script>';
        echo "<script>location.href='../views/extras/register.php'</script>";
    }



