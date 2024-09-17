<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default MySQL username
$password = ""; // Default MySQL password (empty by default)
$dbname = "dit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize form data
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$department = $conn->real_escape_string($_POST['department']);
$gender = $conn->real_escape_string($_POST['gender']);
$position = $conn->real_escape_string($_POST['position']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password for security

// Prepare SQL statement
$sql = "INSERT INTO staff (name, email, department, gender, position, password)
VALUES ('$name', '$email', '$department', '$gender', '$position', '$password')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
