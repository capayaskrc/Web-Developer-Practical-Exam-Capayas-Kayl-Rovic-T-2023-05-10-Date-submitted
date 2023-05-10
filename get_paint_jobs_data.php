<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM cars";
$result = $conn->query($sql);

// Store data in an array
$data = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

// Convert data to JSON and output it
header('Content-Type: application/json');
echo json_encode($data);

// Close the database connection
$conn->close();
?>
