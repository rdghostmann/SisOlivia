Connection Using mysqli_connect(): Similar to the previous refactor, the connection to the database is made using mysqli_connect().

Retrieving Messages with mysqli_query(): The mysqli_query() function is used to execute the SQL query that retrieves messages from the messages table.

Checking and Fetching Results: mysqli_num_rows() checks if there are any messages, and mysqli_fetch_assoc() is used to fetch and display each message.

Escaping Output with htmlspecialchars(): Prevents XSS attacks by escaping special characters in the outputted data (names and messages).