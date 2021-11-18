<?php

    require_once("../Model/conexion.php");
    require_once("../Model/crearPublicaiones.php");
    
    $numero=mt_rand(100000000,999999999);
    $id=
    $descripcionV=$_POST["descripcionV"];
    $descripcionP=$_POST['descripcionP'];
    $imagen1=$_POST['imagen1'];
    $imagen2=$_POST['imagen2'];
    $imagen3=$_POST['imagen3'];
    
    $estado="Habilitado"; 

        define('LIMITE', 2000);
        define('ARREGLO', serialize(array('image/jpg', 'image/png', 'image/gif', 'image/jpeg')));
        $PERMITIDOS = unserialize(ARREGLO);

        if ($_FILES['imagen1']["error"] > 0) {
            if ($_FILES['imagen2']["error"] > 0) {
                if ($_FILES['imagen3']["error"] > 0) {
                   
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
