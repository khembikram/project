<?php
include "connection.php";
include "header.php";

if (isset($_GET['employeecode'])) {
    $getemployeecode = $_GET['employeecode'];

    // Create a mysqli connection
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check if the connection was successful
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    // Delete the record
    $q = "DELETE FROM employee_info WHERE Employee_Code = '$getemployeecode'";

    if ($mysqli->query($q)) {
        header("Location: deletingemployee.php?msg=Information%20Has%20Been%20Deleted....");
        exit;
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }

    // Close the connection
    $mysqli->close();
}
?>
