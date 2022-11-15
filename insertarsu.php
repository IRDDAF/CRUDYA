<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST ['apellidos'];
$nocuenta = $_POST ['nocuenta'];

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

$sql = "INSERT INTO suscripcion (nombre, apellidos, nocuenta)
VALUES ('".$nombre."','".$apellidos."','".$nocuenta."')";

if ($conn->query($sql) === TRUE) {
  header("location:../Suscripcion.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>