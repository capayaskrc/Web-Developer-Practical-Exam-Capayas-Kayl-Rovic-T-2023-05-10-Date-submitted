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
$sql = "SELECT plate_no, current_color, target_color FROM cars WHERE status = 'queued'";
$result = $conn->query($sql);

// Convert the result set to an array
$rows = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
}

// Close the database connection
$conn->close();

// Return the data in JSON format
echo json_encode($rows);
?>
