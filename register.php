<?php
// Database credentials
$host = 'localhost';       // MySQL server host
$username = 'root';        // MySQL username
$password = '';            // MySQL password
$dbname = 'tech_spark';    // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted using POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form input and sanitize to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    // SQL query to insert form data into the registrations table
    $sql = "INSERT INTO registrations (name, email, phone, category) 
            VALUES ('$name', '$email', '$phone', '$category')";

    // Check if the insertion is successful
    if ($conn->query($sql) === TRUE) {
        // Success message
        echo "Registration Successful!";
    } else {
        // Error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
