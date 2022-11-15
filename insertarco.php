<?php
$modelo = $_POST['modelo'];
$sistemaoperativo = $_POST['sistemaoperativo'];
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

$sql = "INSERT INTO computadoras (modelo, sistemaoperativo, costo, garantia)
VALUES ('".$modelo."','".$sistemaoperativo."','".$costo."','".$garantia."')";

if ($conn->query($sql) === TRUE) {
  header("location:../Computadoras.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>