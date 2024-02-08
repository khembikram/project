<?php
session_start();
include_once 'connection.php';


if (isset($_SESSION['sess_user']) && $_SESSION['admin'] === '1') {
    $userId = $_SESSION['sess_user'];
    $lastId = $_SESSION['sess_lastid'];

    // No need to update 'logoutdate' and 'logouttime' for the admin, so remove the ALTER TABLE queries.

    // Prepare the statement
    $stmt = $db->prepare("UPDATE user_attendance SET logouttime=CURRENT_TIME WHERE username=? AND id=?");

    if (!$stmt) {
        echo "Error preparing statement: " . $db->error;
        exit();
    }

    // Bind the parameters
    $stmt->bind_param("si", $userId, $lastId);

    // Execute the query
    if ($stmt->execute()) {
        session_unset();
        session_destroy();
        header("Location: admindashboard.php");
        exit();
    } else {
        echo "Error updating logout information: " . $stmt->error;
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
