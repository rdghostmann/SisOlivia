<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="guestbook-container">
        <h1>Guest Book</h1>
        
        <!-- Guest Book Form -->
        <form id="guestbookForm" action="guestbook.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Submit</button>
        </form>

        <hr>

        <!-- Guest Book Entries Display -->
        <h2>Guest Messages</h2>
        <div id="guestbookMessages">
            
            <?php  include 'display_messages.php'; ?>
        </div>
    </div>


    <script src="/js/validateForm.js"></script>
</body>
</html>
