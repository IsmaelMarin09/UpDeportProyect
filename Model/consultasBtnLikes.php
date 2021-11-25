<?php
require_once("conexion.php");
//estado -1, sigue a la persona , pero la va a dejar de seguir
//estadao 1,no sigue a nadie o no la sigue pero lo va a hacer

//
//
$modificar1=null;
$estado=null;
$id1=$_POST['id_Usr1'];
$id2=$_POST['id_Usr2'];
$id3=$_POST['id22'];
function crearSeguir($unique_IdA,$idP){
    $objetoConexion=new conexion();
    $conexion=$objetoConexion->get_conexion();
    $sql="insert into tablalikes (unique_IdA,idP) values(:unique_IdA,:idP)";
    $statement =$conexion->prepare($sql);
    $statement-> bindParam(':unique_IdA', $unique_IdA);
    $statement-> bindParam(':idP', $idP);   
    if (!$statement) {           
    }else{      
        $statement-> execute();      
    }
}
function deleteSeguir($id_eliminar){
        $objetoConexion=new conexion();
        $conexion=$objetoConexion->get_conexion();
        $sql="delete from tablalikes where id=:id_eliminar";
        $statement= $conexion-> prepare($sql);
        $statement-> bindParam(':id_eliminar',$id_eliminar);
        if(!$statement){            
        }else{
            $statement->execute();                     
            }
}
function modificarestados($arg_campo,$arg_valor,$idACambiar){
    $objetoConexion2=new conexion();
    $conexion3=$objetoConexion2->get_conexion();
    $sql="update publicaciones set $arg_campo =:valor where id =:id_producto";
    $stm = $conexion3->prepare($sql);
    $stm->bindParam(":valor",$arg_valor);
    $stm->bindParam(":id_producto",$idACambiar);
    if (!$stm) {
        $msk= "Error al modificar campo";
    }else{
        $stm->execute();    
    }
}
function definirEstadoDS($e,$id2,$columna){ 
    $f2=null;
    $objetoConexion=new conexion();
    $conexion=$objetoConexion->get_conexion();
    $listar2="SELECT * FROM  publicaciones WHERE id=:id2";
    $statement2=$conexion->prepare ($listar2);
    $statement2 ->bindParam(':id2',$id2);
    $statement2 ->execute();       
    while ($resultado2=$statement2->fetch()) {
        $f2[]=$resultado2;           
    }
    foreach($f2 as $f3){
        $seguidores=intval($f3[$columna]);
        $seguidores=$seguidores+$e;   
        return($seguidores);
    }
 } 
 function definirSeguidos($e,$id1){ 
    $f2=null;
    $objetoConexion=new conexion();
    $conexion=$objetoConexion->get_conexion();
    $listar2="SELECT * FROM  publicaciones WHERE unique_Id=:id1";
    $statement2=$conexion->prepare ($listar2);
    $statement2 ->bindParam(':id1',$id1);
    $statement2 ->execute();       
    while ($resultado2=$statement2->fetch()) {
        $f5[]=$resultado2;           
    } 
    $seguidos=intval($f5['seguidos']);
    $seguidos=$seguidos+$e;
    return ($seguidos);
 }       
$estado=null;
$f=null;
$objetoConexion=new conexion();
$conexion=$objetoConexion->get_conexion();
$listar="SELECT * FROM  tablalikes WHERE unique_idA=:id1";
$statement=$conexion->prepare ($listar);
$statement ->bindParam(':id1',$id1);
$statement ->execute();       
while ($resultado=$statement->fetch()) {
    $f[]=$resultado;           
}
if (isset($f)) {
    foreach($f as $f1 ){
        if ($f1['idP'] == $id2) {
            $estado= -1;
            $idD=$f1['id'];
            deleteSeguir($idD);
            break;
        }
        else{        
            $estado=1;         
        }
     }

}else {$estado= 1;
}
if ($estado==1) {
    crearSeguir($id1,$id2);
}
 $definir=definirEstadoDS($estado,$id2,"likes");
 $modificar1=modificarestados("likes",$definir,$id2);
 session_start();
 if ($_SESSION['rol']=="Administrador") {
    echo "<script type='text/javascript'>window.location.href ='../views/Admin/profile.php?id_user2=".$id3."'</script>";
}
if ($_SESSION['rol']=="Hunter") {
    echo "<script type='text/javascript'>window.location.href ='../views/Hunter/profile.php?id_user2=".$id3."'</script>";
}
if ($_SESSION['rol']=="Deportista") {
    echo "<script type='text/javascript'>window.location.href ='../views/Deportista/profile.php?id_user2=".$id3."'</script>";
} 

          
         
           
    

       



   



?>