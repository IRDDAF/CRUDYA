<?php
$nombre = $_POST['nombre'];
$versioon = $_POST['versioon'];
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

$sql = "INSERT INTO hardware (nombre, versioon )
VALUES ('".$nombre."','".$versioon."')";

if ($conn->query($sql) === TRUE) {
  header("location:../hardware.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>