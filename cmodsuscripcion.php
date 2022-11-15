<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$nocuenta = $_GET ['nocuenta'];

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

$sql = "UPDATE suscripcion SET nombre='".$nombre."', apellidos='".$apellidos."', nocuenta='".$nocuenta."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../Suscripcion.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>