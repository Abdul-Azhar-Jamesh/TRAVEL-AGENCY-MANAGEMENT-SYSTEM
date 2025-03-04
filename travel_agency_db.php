<?php
$hostname = 'localhost';
$username = 'root';
$password = '';  // Keep empty if no password is set in WAMP
$database = 'travel_agency_db';  // Updated database name


$conn = new mysqli($hostname, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database Connected Successfully!";
}
?>
