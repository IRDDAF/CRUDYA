<?php
$id = $_GET['id'];
$modelo = $_GET['modelo'];
$marca = $_GET['marca'];
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

$sql = "UPDATE monitores SET modelo='".$modelo."', marca='".$marca."', costo='".$costo."', garantia='".$garantia."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../Monitores.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>