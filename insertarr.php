<?php
$nombre = $_POST['nombre'];
$modelo = $_POST['modelo'];
$costo = $_POST ['costo'];
$garantia = $_POST ['garantia'];
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

$sql = "INSERT INTO refacciones (nombre, modelo, costo, garantia)
VALUES ('".$nombre."','".$modelo."','".$costo."','".$garantia."')";

if ($conn->query($sql) === TRUE) {
  header("location:../Refacciones.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>