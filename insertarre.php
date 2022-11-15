<?php
$mes = $_POST['mes'];
$duracion = $_POST['duracion'];
$termino = $_POST ['termino'];

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

$sql = "INSERT INTO renta (mes, duracion, termino)
VALUES ('".$mes."','".$duracion."','".$termino."')";

if ($conn->query($sql) === TRUE) {
  header("location:../Renta.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>