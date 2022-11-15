<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
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

$sql = "UPDATE clientes SET nombre='".$nombre."', telefono='".$telefono."', domicilio='".$domicilio."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../Clientes.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>