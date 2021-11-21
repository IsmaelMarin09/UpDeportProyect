<?php
require_once('../Model/conexion.php');
require_once('../Model/consutasAdmin.php');
$id = $_GET["id"];
$objetoConsultas= new consultasAdmin();
$result =$objetoConsultas->modSolicitarPqrs($id);
echo"<script> window.location.replace('../views/Admin/controlDeSolicitudes.php'); </script>";


?>