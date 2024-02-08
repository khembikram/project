<?php
session_start();
include "connection.php";
include "header.php";
?>
<?php
$getemployeecode = $_GET['employeecode'];
$q = "DELETE FROM intern_info WHERE employeecode='" . $getemployeecode . "'";
$rs = mysqli_query($db, $q);
if ($rs) {
    header("Location:deletingintern.php?msg=Information Has Been Deleted....");
    exit;
    print "Your Record Has Been Deleted....";
}
?>
