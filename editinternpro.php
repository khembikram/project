<?php
include "connection.php";
include "header.php";

if (isset($_POST['submit'])) {
    $getemployeecode = $_POST['employeecode'];
    $getintern = $_POST['intern'];
    $getinstitution = $_POST['institution'];
    $getaq = $_POST['academic_qualification'];
    $getaddress = $_POST['address'];
    $getphone = $_POST['phone_no'];

    // Create a mysqli connection
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check if the connection was successful
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    // Prepare the statement
    $stmt = $mysqli->prepare("UPDATE intern_info SET name=?, institution=?, academic_qualification=?, address=?, phone_no=? WHERE employeecode=?");

    // Bind parameters to the statement
    $stmt->bind_param("ssssss", $getintern, $getinstitution, $getaq, $getaddress, $getphone, $getemployeecode);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<br><br><br>Record Has Been Updated....";
    } else {
        echo "Error updating record: " . $mysqli->error;
    }

    // Close the statement and connection
    $stmt->close();
    $mysqli->close();
}
?>
</body>
</html>
