<?php 

$id=$_GET["id"];

$nombre=$_GET["nombre"];

$telefono=$_GET["telefono"];

$domicilio=$_GET["domicilio"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilosfaadpro.css">
    <title>Clientes</title>
</head>
<body>
<form action="cmodclientes.php" method= "GET">
        <div class="form">
            <h1>Clientes</h1>
            <div class="grupo">
                <input type="text" name="id" value='<?php echo $id ?>' readonly="readonly" required><span class="barra"></span>
                <label>ID</label>
            </div>
            <div class="grupo">
                <input type="text" name="nombre" value='<?php echo $nombre ?>' required><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <div class="grupo">
                <input name="telefono" value='<?php echo $telefono ?>' type="number" required><span class="barra"></span>
                <label>Telefono</label>
            </div>
            <div class="grupo">
                <input name="domicilio" value='<?php echo $domicilio ?>' type="text" required><span class="barra"></span>
                <label>Domicilio</label>
            </div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>
</body>
</html>