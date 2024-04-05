<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aggregator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve values from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check if the username and password match
$sql = "SELECT * FROM users WHERE username='$username' AND password1='$password'";
$result = $conn->query($sql);

// Check if the query returned a row
if ($result->num_rows > 0) {
    // Valid username and password
    header("Location: index.html"); // Redirect to the index page
} else {
    // Invalid username or password
    echo "Invalid username or password. Please try again.";
}

// Close the database connection
$conn->close();
?>
