<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu mejor amigo en casa - Dashboard</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
    <main class="dashboard">
        <header>
            <h2>Administrar Mascotas</h2>
            <a href="index.php" class="close"></a>
        </header>
       <a href="add.php" class="add"></a>   
       <table>
           <?php
           /* asi se importa, primero se necita importar*/
             require("conexion.php");
             $consulta = "SELECT * FROM tablepets";
             $resultado = $mysqli->query($consulta);
             while($arreglo= mysqli_fetch_array($resultado)){
                 
            
           ?>
           <tr>
               <td>
                    <figure class="photo">
                        <img src="imgs/photo-sm-1.svg" alt="">
                    </figure>
                    <div class="info">
                    <h3><?php echo $arreglo['id'] ?></h3>
                        <h3><?php echo $arreglo['nombre'] ?></h3>
                        <h4><?php echo $arreglo['raza'] ?></h4>
                        <h4><?php echo $arreglo['genero'] ?></h4>
                        <h4><?php echo $arreglo['categoria'] ?></h4>
                    </div>
                    <div class="controls">
                        <a href="show.php" class="show"></a>
                        <a href="edit.php?primaryU=<?php echo $arreglo['id'] ?>" class="edit"></a>
                        <a href="delete.php?primaryD=<?php echo $arreglo['id'] ?>" class="delete"></a>
                    </div>
               </td>
           </tr>
           <?php
             }
           ?>
           
       </table>
    </main>
    <?php
// Consulta se necesita (Base datos/table-conexion-interfaz/tabla,formulario/grid/una funcion logica/conexion,select,ejecutar,array,carga de info dinamica)
// Update se necesita (Base datos/table-conexion-interfaz(que tenga un select)/metodo get(?primary, variable por metodo get enviada por medio de una etiqueta href)/formulario de edición(en este atterizar la variable por metodo GET)/conexion/una funcion logica-consulta con where y valor a buscar/selec,array, y emviamos info por post archivo logico new(aterrizar variables, conexion,Update))
// DELETE (base de datos), interfaz/select/Envio llave primary(metodo GET)/archivologico delet(aterrizar variables metodo Get)/conexion/delete


?>  
</body>
</html>