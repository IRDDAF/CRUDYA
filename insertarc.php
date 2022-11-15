<?php
$nombre = $_POST['nombre'];
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

$sql = "INSERT INTO clientes (nombre, email, telefono, domicilio)
VALUES ('".$nombre."','".$telefono."','".$domicilio."')";

if ($conn->query($sql) === TRUE) {
  header("location:../Clientes.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>