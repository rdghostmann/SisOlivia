<?php
// Database connection using mysqli_connect
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_registration_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and escape form data to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $event = mysqli_real_escape_string($conn, $_POST['event']);

    // SQL query to insert registration data
    $sql = "INSERT INTO registrations (name, email, phone, event) VALUES ('$name', '$email', '$phone', '$event')";

    // Execute the query and handle the result
    if (mysqli_query($conn, $sql)) {
        // Set a success message
        $message = "Thank you for registering for the event.";
    } else {
        // Set an error message
        $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the connection
mysqli_close($conn);
?>
