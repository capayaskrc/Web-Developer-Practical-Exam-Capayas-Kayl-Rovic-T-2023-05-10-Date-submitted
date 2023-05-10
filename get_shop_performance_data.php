<?php

// Connect to the database and retrieve the data
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query to get the total number of painted cars
$painted_sql = "SELECT COUNT(*) AS total FROM cars WHERE status = 'Mark as Completed'";

$painted_result = $conn->query($painted_sql);

if ($painted_result->num_rows > 0) {
  // Fetch the result
  $painted_row = $painted_result->fetch_assoc();
  $painted = $painted_row["total"];
} else {
  $painted = 0;
}

// Query to get the breakdown of painted cars by color
$blue_sql = "SELECT COUNT(*) AS total FROM cars WHERE status = 'Mark as Completed' AND target_color = 'blue'";
$red_sql = "SELECT COUNT(*) AS total FROM cars WHERE status = 'Mark as Completed' AND target_color = 'red'";
$green_sql = "SELECT COUNT(*) AS total FROM cars WHERE status = 'Mark as Completed' AND target_color = 'green'";

$blue_result = $conn->query($blue_sql);
$red_result = $conn->query($red_sql);
$green_result = $conn->query($green_sql);

if ($blue_result->num_rows > 0) {
  // Fetch the result
  $blue_row = $blue_result->fetch_assoc();
  $blue_count = $blue_row["total"];
} else {
  $blue_count = 0;
}

if ($red_result->num_rows > 0) {
  // Fetch the result
  $red_row = $red_result->fetch_assoc();
  $red_count = $red_row["total"];
} else {
  $red_count = 0;
}

if ($green_result->num_rows > 0) {
  // Fetch the result
  $green_row = $green_result->fetch_assoc();
  $green_count = $green_row["total"];
} else {
  $green_count = 0;
}

// Close the database connection
$conn->close();

// Return the data as a JSON object
$data = array(
    'painted' => $painted,
    'blue_count' => $blue_count,
    'red_count' => $red_count,
    'green_count' => $green_count
);

header('Content-Type: application/json');
echo json_encode($data);
