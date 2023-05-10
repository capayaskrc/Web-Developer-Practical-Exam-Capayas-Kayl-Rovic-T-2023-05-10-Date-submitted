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

    // Prepare and execute SQL query to insert form data into database
    $sql = "INSERT INTO cars (plate_no, current_color, target_color) VALUES (:plate_no, :current_color, :target_color)";
    $stmt = $pdo->prepare($sql);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING ); 
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $stmt->execute([
        ':plate_no' => $plate_no,
        ':current_color' => $current_color,
        ':target_color' => $target_color
    ]);

    // Redirect to success page
    header('Location: paintjobs.php');
    exit();
}
?>