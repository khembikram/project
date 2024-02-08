<?php
// Make sure to include the correct file path for the connection.php and header.php files
include "connection.php";
include "header.php";
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $getsalutation = $_POST['Salutation'];
    $getemployeecode = $_POST['employeecode'];
    $getfirstname = $_POST['firstname'];
    $getmiddlename = $_POST['middlename'];
    $getlastname = $_POST['lastname'];
    $getgender = $_POST['gender'];
    $getmaritalstatus = $_POST['maritalstatus'];
    $getposition = $_POST['position'];

    // Check if required fields are not empty
    if (strlen($getemployeecode) > 0 && strlen($getfirstname) > 0) {
        // Use prepared statement to prevent SQL injection
        $query = "INSERT INTO employee_info (Salutation, Employee_Code, First_Name, Middle_Name, Last_Name, Gender, Marital_Status, Position) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ssssssss", $getsalutation, $getemployeecode, $getfirstname, $getmiddlename, $getlastname, $getgender, $getmaritalstatus, $getposition);

        // Execute the query and handle the result
        if ($stmt->execute()) {
            echo "<p>Information saved successfully.</p>";
        } else {
            echo "<p>Failed to store information.</p>";
            // You can also print the exact error message for debugging purposes:
            // echo "Error: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "<p>Employee Code and First Name are required fields.</p>";
    }
}
?>
