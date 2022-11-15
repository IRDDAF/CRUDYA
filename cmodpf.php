<?php
$id = $_GET['id'];
$pregunta = $_GET['pregunta'];
$respuesta = $_GET['respuesta'];



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

$sql = "UPDATE preguntasfrecuentes SET pregunta='".$pregunta."', respuesta='".$respuesta."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../PreguntasFrecuentes.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>