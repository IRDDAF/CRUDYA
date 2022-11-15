<?php
$id = $_GET['id'];
$modelo = $_GET['modelo'];
$sistemaoperativo = $_GET ['sistemaoperativo'];
$costo = $_GET ['costo'];
$garantia = $_GET ['garantia'];

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

$sql = "UPDATE computadoras SET modelo='".$modelo."', sistemaoperativo='".$sistemaoperativo."', costo='".$costo."', garantia='".$garantia."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../Computadoras.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>