<?php
// Start the session
session_start();

include "connection.php";
include "header.php";

ini_set('display_errors', 0);

if (isset($_POST['submit'])) {
    $getintern = isset($_POST['intern']) ? $_POST['intern'] : '';
    $getinstitution = isset($_POST['institution']) ? $_POST['institution'] : '';
    $getaq = isset($_POST['academic_qualification']) ? $_POST['academic_qualification'] : '';
    $getaddress = isset($_POST['address']) ? $_POST['address'] : '';
    $getphone = isset($_POST['phone']) ? $_POST['phone'] : '';

    if (strlen($getintern) > 0 && strlen($getinstitution) > 0 && strlen($getaq) > 0 && strlen($getaddress) > 0 && strlen($getphone) > 0) {
        // Create a mysqli connection
        $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

        // Check if the connection was successful
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            exit();
        }

        // Prepare the statement
        $stmt = $mysqli->prepare("INSERT INTO intern_info (employeecode, name, institution, academic_qualification, address, phone_no) VALUES (?, ?, ?, ?, ?, ?)");

        // Generate employeecode based on timestamp
        $timestamp = time(); // Get the current timestamp
        $getemployeecode = "EMP-" . $timestamp;

        // Bind parameters to the statement
        $stmt->bind_param("ssssss", $getemployeecode, $getintern, $getinstitution, $getaq, $getaddress, $getphone);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<p>Information saved successfully...</p>";
        } else {
            echo "<p>Failed to store information</p>";
        }

        // Close the statement and connection
        $stmt->close();
        $mysqli->close();
    }
}
?>

<center>
    <br />
    <h2 style="background-color:#FF5F00;width:600px;margin:10px; border-radius:10px;"><b>Intern Information Entry</b></h2>
    <br>
    <form action="internInfo.php" method="post">
        <table border="0" width="600" height="300">
            <tr>
                <td>Name of Intern:</td>
                <td><input type="text" name="intern"></td>
            </tr>
            <tr>
                <td>Name of Institution:</td>
                <td><input type="text" name="institution"></td>
            </tr>
            <tr>
                <td>Academic Qualification:</td>
                <td><input type="text" name="academic_qualification"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Phone No.:</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
                <td><input type="reset" name="cancel"></td>
            </tr>
        </table>
    </form>
</center>
</div>
</html>
