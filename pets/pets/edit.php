<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu mejor amigo en casa - Edit</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
    <main class="edit">
        <header>
            <h2>Modificar Mascota</h2>
            <a href="dashboard.php" class="back"></a>
            <a href="index.php" class="close"></a>
        </header>
        <figure class="photo-preview">
            <img src="imgs/photo-lg-1.svg" alt="">
        </figure>
        <?php
            require("conexion.php");
            $id =$_GET['primaryU'];
            $consulta= "SELECT * FROM tablepets WHERE id='$id'";
            $resultado= $mysqli -> query($consulta);
            if($arreglo= mysqli_fetch_array($resultado)){

            }
        
        ?>
        <form action="actualizarMascota.php" method="post">
            <input type="text" name="id"  readonly placeholder="Nombre" value="<?php echo $arreglo['id'] ?>">
            <input type="text" name="name" placeholder="Nombre" value="<?php echo $arreglo['nombre'] ?>">
            <div class="select">
                <select name="raza">
                    <option value="<?php echo $arreglo['raza'] ?>"><?php echo $arreglo['raza'] ?></option>
                    <option value="Corgi">Corgi</option>
                    <option value="Bulldog" >Bulldog</option>
                </select>
            </div>
            <div class="select">
                <select name="categoria">
                    <option value="<?php echo $arreglo['categoria'] ?>"><?php echo $arreglo['categoria'] ?></option>
                    <option value="Perro" >Perro</option>
                    <option value="Gato">Gato</option>
                </select>
            </div>
            
            <div class="select">
                <select name="genero">
                    <option value="<?php echo $arreglo['genero'] ?>"><?php echo $arreglo['genero'] ?></option>
                    <option value="Hembra">Hembra</option>
                    <option value="Macho" >Macho</option>
                </select>
            </div>
            <button class="update">Modificar</button>
        </form>

    </main>
<?php
// cuando se usa un registro  se necesita los campos llenos de action method(POST-),campos de form=(name) y el button dentro del formulario
// debe haber una base de datos( tabla oara guardar los dats)
//conexion php(si no no se puede enviar nada)
//archivo logico,Atterizar validar POST, conectarse de name,validar campos vacios, validar campos unicos-Insert



?>  
</body>
</html>