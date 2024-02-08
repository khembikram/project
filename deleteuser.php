<?php
include "connection.php";
include "header.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Using prepared statement to prevent SQL injection
    $del = "DELETE FROM user_table WHERE ID = ?";
    $stmt = mysqli_prepare($db, $del);

    if ($stmt) {
        // Bind the parameter
        mysqli_stmt_bind_param($stmt, 'i', $id);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            header('Location: user.php');
            exit();
        } else {
            echo "Error executing the query: " . mysqli_error($db);
        }
    } else {
        echo "Error preparing the statement: " . mysqli_error($db);
    }
}
?>
