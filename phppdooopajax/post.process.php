 <?php


// Connection details
$host = 'localhost';
$dbname = 'database_name';
$username = 'database_username';
$password = 'database_password';

// Connect to the database
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Get the posted data
$username = $_POST['username'];

// Check if the user already exists
$stmt = $conn->prepare('SELECT * FROM users WHERE username = :username');
$stmt->bindParam(':username', $username);
$stmt->execute();
if ($stmt->rowCount() > 0) {
  // User already exists, return an error message
  echo 'Username already exists';
} else  





 ?>