<?php
$nombre = $_POST['nombre'];
$departamento = $_POST['departamento'];
$telefono = $_POST ['telefono'];
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

$sql = "INSERT INTO empleados (nombre, departamento, telefono)
VALUES ('".$nombre."','".$departamento."','".$telefono."')";

if ($conn->query($sql) === TRUE) {
  header("location:../Empleados.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>