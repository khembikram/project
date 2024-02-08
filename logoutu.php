<?php
session_start();
include_once 'connection.php';

date_default_timezone_set("Asia/Kathmandu");
$date = date('h:i:s');
$yr = date('Y-m-d');
$iUser = $_SESSION['sess_user'];
$iPass = $_SESSION['sess_pass'];

// Set the database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_attend";

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$q = "UPDATE user_attendance SET logouttime='$date' WHERE ID=" . $_SESSION['sess_lastid'];

// Perform the query using the connection object
$rs = $conn->query($q);

if ($rs === false) {
    die("Query failed: " . $conn->error);
} else {
    // Logout successful, destroy the session and redirect
    session_destroy();
    header("Location: index.php");
    exit();
}

// Close the connection
$conn->close();
?>
