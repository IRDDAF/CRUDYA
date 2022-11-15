<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Alquiler de equipo de computo</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./estilos/estilodeformulario.css">
<link rel="stylesheet" href="./estilos/estilomenuu.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="menu">
        <input id="menu__toggle" type="checkbox" class='menu__toggle' />
        <label for="menu__toggle" class="menu__toggle-label">
          <svg preserveAspectRatio='xMinYMin' viewBox='0 0 24 24'>
            <path d='M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z' />
          </svg>
          <svg preserveAspectRatio='xMinYMin' viewBox='0 0 24 24'>
            <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
          </svg>
        </label>
        <ol class='menu__content'>
          <li class="menu-item"><a href="./index.html">Inicio</a></li>
          <li class="menu-item"><a href="./Accesorios.php">Accesorios</a></li>
          <li class="menu-item"><a href="./Clientes.php">Clientes</a></li>
          <li class="menu-item"><a href="./Promociones.php">Promociones</a></li>
          <li class="menu-item"><a href="./Proveedores.php">Proveedores</a></li>
          <li class="menu-item"><a href="./Servicios.php">Servicios</a></li>
          <li class="menu-item"><a href="./Refacciones.php">Refacciones</a></li>
          <li class="menu-item"><a href="./Computadoras.php">Computadoras</a></li>
          <li class="menu-item"><a href="./KitdeHerramientas.php">KitdeHerramientas</a></li>
          <li class="menu-item"><a href="./Suscripcion.php">Suscripcion</a></li>
          <li class="menu-item"><a href="./PreguntasFrecuentes.php">PreguntasFrecuentes</a></li>
          <li class="menu-item"><a href="./Diseño.php">Diseño</a></li>
          <li class="menu-item"><a href="./Renta.php">Renta</a></li>
          <li class="menu-item"><a href="./Curso.php">Curso</a></li>
          <li class="menu-item"><a href="./Monitores.php">Monitores</a></li>

        </ol>
      </nav>
      
    <section class="app">
        <aside class="sidebar">
        </aside>
      </section>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Clientes <b>FAADPRO</b></h2></div>
                    <div class="col-sm-4">
                        <a href='./insertar/insertarc.html' class="btn btn-info add-new"><i class="fa fa-plus"></i> Añadir clientes</a>
                    </div>
                </div>
            </div>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "accesorios";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, telefono, domicilio FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table class='table table-bordered'>";
  echo "<tr>";
  echo "<th>ID</th><th>nombre</th><th>telefono</th><th>domicilio</th><th>acciones</th>";
  echo "</tr>";
  while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["telefono"]."</td><td>".$row["domicilio"]."</td>";
            echo "<td>
            <a class='edit' title='Editar' data-toggle='tooltip' href='./modificar/formmodclientes.php?id=".$row["id"]."&nombre=".$row["nombre"]."&telefono=".$row["telefono"]."&domicilio=".$row["domicilio"]."' ><i class='material-icons'>&#xE254;</i></a>
            <a class='delete' title='Eliminar' data-toggle='tooltip' href='./eliminar/eliminarc.php?id=".$row["id"]."' ><i class='material-icons'>&#xE872;</i></a>
        </td>";
            echo "</tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
            echo "</table>";
            ?>
        </div>
    </div>
</div>     
</body>
</html>