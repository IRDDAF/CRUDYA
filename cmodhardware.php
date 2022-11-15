<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$versioon = $_GET['versioon'];

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

$sql = "UPDATE hardware SET nombre='".$nombre."', versioon='".$versioon."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../hardware.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>