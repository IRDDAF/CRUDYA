<?php 

$id=$_GET["id"];
$modelo=$_GET["modelo"];
$sistemaoperativo=$_GET["sistemaoperativo"];
$costo=$_GET["costo"];
$garantia=$_GET["garantia"];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilosfaadpro.css">
    <title>Computadoras</title>
</head>
<body>

<form action="cmodcomputadoras.php" method= "GET">
        <div class="form">
            <h1>Computadoras</h1>
            <div class="grupo">
                <input type="text" name="id" value='<?php echo $id ?>' readonly="readonly" required><span class="barra"></span>
                <label>ID</label>
            </div>
            <div class="grupo">
                <input type="text" name="modelo" value='<?php echo $modelo ?>' required><span class="barra"></span>
                <label>Modelo</label>
            </div>
            <div class="grupo">
                <input type="text" name="sistemaoperativo" value='<?php echo $sistemaoperativo ?>' required><span class="barra"></span>
                <label>Sistemaoperativo</label>
            </div>
            <div class="grupo">
                <input type="number" name="costo" value='<?php echo $costo ?>' required><span class="barra"></span>
                <label>Costo</label>
            </div>
            <div class="grupo">
                <input name="garantia" value='<?php echo $garantia ?>' type="text" required><span class="barra"></span>
                <label>Garantia</label>
            </div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>