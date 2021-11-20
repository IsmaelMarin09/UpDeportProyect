<?php

    require_once("../Model/conexion.php");
    require_once("../Model/consutasAdmin.php");
    session_start();
    $unique_Id=$_SESSION['unique_Id'];
    if (strlen($_POST["descripcionV"])>0) {
        $descripcionV=$_POST["descripcionV"];
    }else{
        $descripcionV="none";
    }
    if (strlen($_POST['descripcionP'])>0) {
        $descripcionP=$_POST['descripcionP'];
    }else {
        $descripcionP="none";
    }

    $estado="Habilitado";
        define('LIMITE', 2000);
        define('ARREGLO', serialize(array('image/jpg', 'image/png', 'image/gif', 'image/jpeg')));
        $PERMITIDOS = unserialize(ARREGLO);
        $numero=mt_rand(100000000,999999999);
        if ($_FILES['imagen1']["error"] >0 &&  $_FILES['imagen2']["error"] >0 && $_FILES['imagen3']["error"] > 0 ){
            $img1="none";
            $img2="none";
            $img3="none";
            }else {
            if ($_FILES['imagen1']["error"] >0) {
                $img1="none";     
            }
            else {
                $_FILES['imagen1']['name']=$numero."img1".".jpg";
                $imagen1 = "../views/Assets/img/img_publicaciones/" . $_FILES['imagen1']['name'];
                $img1 = move_uploaded_file($_FILES["imagen1"]["tmp_name"], $imagen1); 
                $img1 = $_FILES['imagen1']['name'];
               
            }
            if ($_FILES['imagen2']["error"] >0) {
                $img2="none";     
            }
            else {
                $_FILES['imagen2']['name']=$numero."img2".".jpg";
                $imagen2 = "../views/Assets/img/img_publicaciones/" . $_FILES['imagen2']['name'];
                $img2 = move_uploaded_file($_FILES["imagen2"]["tmp_name"], $imagen2); 
                $img2 = $_FILES['imagen2']['name'];
                
            }
            if ($_FILES['imagen3']["error"] >0) {
                $img3="none";        
            }
            else {
                $_FILES['imagen3']['name']=$numero."img3".".jpg";
                $imagen3 = "../views/Assets/img/img_publicaciones/" . $_FILES['imagen3']['name'];
                $img3 = move_uploaded_file($_FILES["imagen3"]["tmp_name"], $imagen3); 
                $img3 = $_FILES['imagen3']['name'];
                
            }
        }if($descripcionP=="none" && $descripcionV=="none" && $img1=="none" && $img2=="none" && $img3=="none"){
                echo "<script type='text/javascript'>alert('porfavor llene un campo');</script>";
            }else{
                $objetoConsultas = new consultasAdmin();
                $result = $objetoConsultas->insertarPublicacion($unique_Id,  $descripcionP, $descripcionV, $img1, $img2, $img3, $estado);
                
                echo "<script type='text/javascript'>alert('Publicacion creada con exito');</script>";
            }    
       
        echo"<script> window.location.replace('../views/Admin/profile.php'); </script>";
       
                      