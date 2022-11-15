<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$telefono = $_GET ['telefono'];
$domicilio = $_GET ['domicilio'];

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

$sql = "UPDATE proveedores SET nombre='".$nombre."', apellido='".$apellido."', telefono='".$telefono."', domicilio='".$domicilio."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../Proveedores.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>