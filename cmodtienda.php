<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$ubicacion = $_GET['ubicacion'];
$horario = $_GET ['horario'];
$telefono = $_GET ['telefono'];

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

$sql = "UPDATE tienda SET nombre='".$nombre."', ubicacion='".$ubicacion."', horario='".$horario."', telefono='".$telefono."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../Tienda.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>