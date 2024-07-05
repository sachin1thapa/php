<?php

$servername = "localhost";
$username = "root";
$password = "your_password";
$database = "myDatabase";
$port = 3308; // Default MySQL port

// Create connection
$conn = new mysqli($servername, $username, $password, "", $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// Create database
$sql = "CREATE DATABASE myDatabase";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select database
$conn->select_db("myDatabase");

// Create table
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>