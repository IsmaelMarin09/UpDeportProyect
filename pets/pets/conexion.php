<?php
    $mysqli= new mysqli('localhost','root','','pets');
    if($mysqli->connect_errno) {
        echo"Lo sentimos este sitio web presenta problemas de conectividad";
    }
    else{
        
    }
?>