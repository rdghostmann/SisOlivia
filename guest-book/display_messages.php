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

// SQL query to retrieve messages
$sql = "SELECT name, message, created_at FROM messages ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

// Check if any messages exist
if (mysqli_num_rows($result) > 0) {
    // Output each message
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='message-item'>";
        echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
        echo "<p>" . htmlspecialchars($row['message']) . "</p>";
        echo "<small>Posted on " . $row['created_at'] . "</small>";
        echo "</div>";
    }
} else {
    echo "<p>No messages yet.</p>";
}

// Close the connection
mysqli_close($conn);
?>
