<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "wtbackend";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else{
    echo "Connection Sucessful";
}