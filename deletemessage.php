<?php

include "connection.php";
include "header.php";

$name = $_GET['name'];
$q = "DELETE FROM message WHERE name='$name'";
$rs = mysqli_query($db, $q); // Corrected the order of arguments

if ($rs) {
    header("Location:deletingmessage.php?msg=Message Has Been Deleted....");
    exit;
    //print "Your Record Has Been Deleted....";
}
?>
