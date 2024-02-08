<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once "connection.php";

if (!isset($_SESSION['sess_user'])) {
    header("Location: login.php");
    exit();
}
?>
