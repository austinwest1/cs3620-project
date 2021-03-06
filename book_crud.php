<?php
$servername = "austinwest-cs3620db.mysql.database.azure.com";

session_start();

$username = (isset($_SESSION["SQLUSER"]) ? $_SESSION["SQLUSER"] : $_ENV['SQLUSER']);
$password = (isset($_SESSION["SQLPW"]) ? $_SESSION["SQLPW"] : $_ENV['SQLPW']);
$dbname = "cs3620_proj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO books (book_id, title, author)
VALUES (1, 'Red Rising', 'Pierce Brown')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT book_id, title, author FROM books
WHERE book_id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Book ID: " . $row["book_id"] . "  - Title: " . $row["title"] . "  - Author: " . $row["author"] . "<br>";
    }
} else {
    echo "0 results";
}

$sql = "DELETE FROM books
WHERE book_id = 1";

if ($conn->query($sql) === TRUE) {
    echo "Record successfully deleted.\n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
