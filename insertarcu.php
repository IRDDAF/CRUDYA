<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST ['telefono'];
$curso = $_POST ['curso'];
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

$sql = "INSERT INTO curso (nombre, apellido, telefono, curso)
VALUES ('".$nombre."','".$apellido."','".$telefono."','".$curso."')";

if ($conn->query($sql) === TRUE) {
  header("location:../Curso.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>