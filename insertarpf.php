<?php
$pregunta = $_POST['pregunta'];
$respuesta = $_POST ['respuesta'];
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

$sql = "INSERT INTO preguntasfrecuentes (pregunta, respuesta)
VALUES ('".$pregunta."','".$respuesta."')";

if ($conn->query($sql) === TRUE) {
  header("location:../PreguntasFrecuentes.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>