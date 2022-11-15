<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$departamento = $_GET ['departamento'];
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

$sql = "UPDATE empleados SET nombre='".$nombre."', departamento='".$departamento."', telefono='".$telefono."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../Empleados.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>