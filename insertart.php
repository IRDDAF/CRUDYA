<?php
$nombre = $_POST['nombre'];
$ubicacion = $_POST ['ubicacion'];
$horario = $_POST ['horario'];
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

$sql = "INSERT INTO tienda (nombre, ubicacion, horario, telefono)
VALUES ('".$nombre."','".$ubicacion."','".$horario."','".$telefono."')";

if ($conn->query($sql) === TRUE) {
  header("location:../Tienda.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>