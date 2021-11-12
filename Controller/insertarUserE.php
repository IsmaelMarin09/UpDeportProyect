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
    $estado="Habilitado"; 

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
                    echo "se creo usuario";





