<?php
$id = $_GET['id'];
$modelo = $_GET['modelo'];
$tipos = $_GET['tipos'];
$caracteristicas = $_GET ['caracteristicas'];

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

$sql = "UPDATE diseño SET modelo='".$modelo."', tipos='".$tipos."', caracteristicas='".$caracteristicas."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../Diseño.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>