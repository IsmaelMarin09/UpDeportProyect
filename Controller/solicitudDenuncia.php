<?php    
    require_once("../Model/conexion.php");
    require_once("../Model/consutasAdmin.php");
    
    $id_Usr1=$_POST["id_Usr1"];
    $idP=$_POST['id_Usr2'];
    $id_Usr2=$_POST['id_Usr3'];
    $tipo=$_POST['tipo'];
    $descripcion=$_POST['descripcion'];
   
    $estado='Pendiente';
    $objetoConsulta=new consultasAdmin();
    $result=$objetoConsulta->insertarDenuncias($id_Usr1,$id_Usr2,$tipo,$descripcion,$idP,$estado);
    session_start();
    if ($_SESSION['rol']=="Administrador") {
        echo "<script>location.href='../views/Admin/profile.php'</script>";
    }
    if ($_SESSION['rol']=="Hunter") {
        echo "<script>location.href='../views/Hunter/profile.php'</script>";
    }
    if ($_SESSION['rol']=="Deportista") {
        echo "<script>location.href='../views/deportista/profile.php'</script>";
    } 
            
     
    


?>    