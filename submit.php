<?php
$servername = "localhost";
$dbname = 'cars';
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get form data
  $plate_no = $_POST['name'];
  $current_color = $_POST['current-color'];
  $target_color = $_POST['target-color'];
  $status = 'queued'; // set the initial status as 'queued'

  // Prepare and execute SQL query to insert form data into database
  $sql = "INSERT INTO cars (plate_no, current_color, target_color, status) VALUES (:plate_no, :current_color, :target_color, :status)";
  $stmt = $pdo->prepare($sql);
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING ); 
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $stmt->execute([
      ':plate_no' => $plate_no,
      ':current_color' => $current_color,
      ':target_color' => $target_color,
      ':status' => $status
  ]);

  // Get the latest paint job data from the database
  $sql = "SELECT * FROM cars ORDER BY idno DESC LIMIT 1";
  $stmt = $pdo->query($sql);  
  $paint_job = $stmt->fetch(PDO::FETCH_ASSOC);

  // Return the paint job data as a JSON response
  header('Location: paintjobs.php');
  echo json_encode($paint_job);
  exit();
}
?>