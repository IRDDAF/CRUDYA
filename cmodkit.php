<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$costo = $_GET ['costo'];
$garantia = $_GET ['garantia'];

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

$sql = "UPDATE kitdeherramientas SET nombre='".$nombre."', costo='".$costo."', garantia='".$garantia."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../KitdeHerramientas.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>