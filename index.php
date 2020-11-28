<?php
$servername = "db";
$username = "root";
$password = "root";
$dbname = "MyDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, descrip FROM basic_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Descrip: " . $row["descrip"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>