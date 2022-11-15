<?php
$tipo = $_POST['tipo'];
$contacto = $_POST['contacto'];
$costo = $_POST ['costo'];
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

$sql = "INSERT INTO servicios (tipo, contacto, costo)
VALUES ('".$tipo."','".$contacto."','".$costo."')";

if ($conn->query($sql) === TRUE) {
  header("location:../Servicios.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>