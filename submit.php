<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$attendance = $_POST['attendance'];

// Insert data into database
$sql = "INSERT INTO students (name, attendance_status) VALUES ('$name', '$attendance')";

if ($conn->query($sql) === TRUE) {
    echo "Attendance recorded successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
