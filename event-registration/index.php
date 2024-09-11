<?php include 'register_event.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="registration-container">
        <h1>Event Registration Form</h1>

        <!-- Display the success or error message -->
        <?php if (isset($message)) : ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>

        <form id="registrationForm" action="index.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="event">Select Event:</label>
            <select id="event" name="event" required>
                <option value="Tech Conference">Tech Conference</option>
                <option value="Web Development Workshop">Web Development Workshop</option>
                <option value="Startup Pitch Event">Startup Pitch Event</option>
            </select>

            <button type="submit">Register</button>
        </form>
    </div>

</body>

</html>
