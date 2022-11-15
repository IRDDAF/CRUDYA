<?php
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$descuento = $_POST ['descuento'];
$vigencia = $_POST ['vigencia'];
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

$sql = "INSERT INTO promociones (nombre, descripcion, descuento, vigencia)
VALUES ('".$nombre."','".$descripcion."','".$descuento."','".$vigencia."')";

if ($conn->query($sql) === TRUE) {
  header("location:../Promociones.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>