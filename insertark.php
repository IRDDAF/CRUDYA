<?php
$nombre = $_POST['nombre'];
$costo = $_POST ['costo'];
$garantia = $_POST ['garantia'];
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

$sql = "INSERT INTO kitdeherramientas (nombre, costo, garantia)
VALUES ('".$nombre."','".$costo."','".$garantia."')";

if ($conn->query($sql) === TRUE) {
  header("location:../KitdeHerramientas.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>