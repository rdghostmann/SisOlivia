<?php
// Database connection using mysqli_connect
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guestbook_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and escape to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // SQL query to insert data into the 'messages' table
    $sql = "INSERT INTO messages (name, message) VALUES ('$name', '$message')";

    // Execute query and check if it was successful
    if (mysqli_query($conn, $sql)) {
        // Redirect back to the guest book page after successful submission
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the connection
mysqli_close($conn);
?>
