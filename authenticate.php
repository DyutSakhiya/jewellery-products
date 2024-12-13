<?php
session_start();

// Database connection details
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'jewellery';

// Try to connect to the database
$con = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// Check the connection
if ($con->connect_error) {
   
    exit('Failed to connect to MySQL: ' . $con->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input
    if (empty($_POST['username']) || empty($_POST['password'])) {
        exit('Please fill all the fields.');
    }

    $name = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare an SQL statement
    $stmt = $con->prepare("INSERT INTO users (first_name, last_name, password) VALUES (?, 'patel', ?)");
    $stmt->bind_param("ss", $name, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        
        // Redirect to homepage
        header('Location: index.php');
        exit();
    } else {
        echo "ERROR: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$con->close();
?>
