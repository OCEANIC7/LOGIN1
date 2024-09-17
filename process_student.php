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
$course = $conn->real_escape_string($_POST['course']);
$year = (int)$_POST['year']; // Cast to integer
$gender = $conn->real_escape_string($_POST['gender']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password for security

// Prepare SQL statement for `user` table
$sql_user = "INSERT INTO user (name, email, department, password)
VALUES ('$name', '$email', '$department', '$password')";

// Execute SQL statement for `user` table
if ($conn->query($sql_user) === TRUE) {
    echo "New user record created successfully<br>";
} else {
    echo "Error: " . $sql_user . "<br>" . $conn->error;
}



// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$course = $_POST['course'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$action = $_POST['action']; // Get the action (submit, update, delete)

if ($action == 'submit') {
    // Insert new record into the database
    $stmt = $pdo->prepare('INSERT INTO student (name, email, department, course, year, gender, password) VALUES (:name, :email, :department, :course, :year, :gender, :password)');
    $stmt->execute(['name' => $name, 'email' => $email, 'department' => $department, 'course' => $course, 'year' => $year, 'gender' => $gender, 'password' => password_hash($password, PASSWORD_DEFAULT)]);
    echo "Record added successfully!";
} elseif ($action == 'update') {
    // Update existing record
    $stmt = $pdo->prepare('UPDATE student SET name = :name, email = :email, department = :department, course = :course, year = :year, gender = :gender, password = :password WHERE email = :email');
    $stmt->execute(['name' => $name, 'email' => $email, 'department' => $department, 'course' => $course, 'year' => $year, 'gender' => $gender, 'password' => password_hash($password, PASSWORD_DEFAULT)]);
    echo "Record updated successfully!";
} elseif ($action == 'delete') {
    // Delete record
    $stmt = $pdo->prepare('DELETE FROM student WHERE email = :email');
    $stmt->execute(['email' => $email]);
    echo "Record deleted successfully!";
} else {
    echo "Invalid action!";
}
?>
