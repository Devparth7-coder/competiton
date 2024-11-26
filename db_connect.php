<?php
// Database credentials
$host = 'localhost';       // MySQL server host (default is localhost)
$username = 'root';        // MySQL username (default for local development is 'root')
$password = '';            // MySQL password (default for XAMPP is empty)
$dbname = 'tech_spark';    // Database name

// Create a connection using MySQLi
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    // If connection fails, output error message and stop the script
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful message
echo "Successfully connected to the database!";

// Close the connection (good practice to close it after using)
$conn->close();
?>
