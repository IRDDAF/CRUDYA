<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];
$descuento = $_GET ['descuento'];
$vigencia = $_GET ['vigencia'];

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

$sql = "UPDATE promociones SET nombre='".$nombre."', descripcion='".$descripcion."', descuento='".$descuento."', vigencia='".$vigencia."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../Promociones.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>