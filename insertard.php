<?php
$modelo = $_POST['modelo'];
$tipos = $_POST['tipos'];
$caracteristicas = $_POST ['caracteristicas'];

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

$sql = "INSERT INTO diseño (modelo, tipos, caracteristicas)
VALUES ('".$modelo."','".$tipos."','".$caracteristicas."')";

if ($conn->query($sql) === TRUE) {
  header("location:../Diseño.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>