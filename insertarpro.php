<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST ['telefono'];
$domicilio = $_POST ['domicilio'];
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

$sql = "INSERT INTO proveedores (nombre, apellido, telefono, domicilio)
VALUES ('".$nombre."','".$apellido."','".$telefono."','".$domicilio."')";

if ($conn->query($sql) === TRUE) {
  header("location:../Proveedores.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>