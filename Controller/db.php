<?php
$servidor="localhost";
$user="root";
$password="";
$bd="updeport";

$conexion=new mysqli($servidor,$user,$password,$bd);
$conn = mysqli_connect($servidor, $user, $password, $bd);
function formatearFecha($fecha){
    return date('g:i a', strtotime($fecha));
}

?>