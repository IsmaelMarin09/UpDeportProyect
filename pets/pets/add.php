<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu mejor amigo en casa - Add</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
    <main class="add">
        <header>
            <h2>Adicionar Mascota</h2>
            <a href="dashboard.php" class="back"></a>
            <a href="index.php" class="close"></a>
        </header>
        <figure class="photo-preview">
            <img src="imgs/photo-lg-0.svg" alt="">
        </figure>         
        <form action="registrarMacosta.php" method="POST">
            <input type="text" name="name" required placeholder="Nombre">
            <div class="select" required>
                <select name="raza">
                    <option value="">Seleccione Raza...</option>
                    <option value="corgi">Corgi</option>
                    <option value="Bulldog">Bulldog</option>
                </select>
            </div>
            <div class="select">
                <select name="categoria" required>
                    <option value="">Seleccione Categoría...</option>
                    <option value="Perro">Perro</option>
                    <option value="Gato">Gato</option>
                </select>
            </div>
            <div class="select">
                <select name="genero" required>
                    <option value="">Seleccione Genero...</option>
                    <option value="Hembra">Hembra</option>
                    <option value="Macho">Macho</option>
                </select>
            </div>
            <button class="Guardar">Guardar</button>
        </form>
    </main>
</body>
</html>