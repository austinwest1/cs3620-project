<?php
$servername = "austinwest-cs3620db.mysql.database.azure.com";

$username = $_ENV('SQLUSER');
$password = $_ENV('SQLPASS');
$dbname = "cs3620_proj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO movies (movie_id, movie_name)
VALUES (41, 'Jurassic Park')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
