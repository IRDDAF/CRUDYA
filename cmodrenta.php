<?php
$id = $_GET['id'];
$mes = $_GET['mes'];
$duracion = $_GET['duracion'];
$termino = $_GET ['termino'];

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

$sql = "UPDATE renta SET mes='".$mes."', duracion='".$duracion."', termino='".$termino."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../Renta.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>