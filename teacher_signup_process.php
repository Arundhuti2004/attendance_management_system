<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];




// Prepare SQL statement
$sql = "INSERT INTO teachers (username, password) VALUES ('$username', '$password')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    // Redirect to login page upon successful registration
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
