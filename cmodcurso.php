<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$telefono = $_GET ['telefono'];
$curso = $_GET ['curso'];

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

$sql = "UPDATE curso SET nombre='".$nombre."', apellido='".$apellido."', telefono='".$telefono."', curso='".$curso."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../Curso.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>