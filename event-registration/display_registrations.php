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

// SQL query to retrieve registrations
$sql = "SELECT name, email, phone, event, registered_at FROM registrations ORDER BY registered_at DESC";
$result = mysqli_query($conn, $sql);

// Check if there are any registrations
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'><tr><th>Name</th><th>Email</th><th>Phone</th><th>Event</th><th>Registered At</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
        echo "<td>" . htmlspecialchars($row['event']) . "</td>";
        echo "<td>" . $row['registered_at'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No registrations found.";
}

// Close the connection
mysqli_close($conn);
?>
