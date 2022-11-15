<?php
$id = $_GET['id'];
$tipo = $_GET['tipo'];
$contacto = $_GET['contacto'];
$costo = $_GET ['costo'];

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

$sql = "UPDATE servicios SET tipo='".$tipo."', contacto='".$contacto."', costo='".$costo."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../Servicios.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>