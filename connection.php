<?php
$db_host = "localhost";
$db_name = "db_attend";
$db_user = "root";
$db_password = "";

$db = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
