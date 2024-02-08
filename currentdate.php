<?php
session_start();
include "connection.php";
include "header.php";

// Set the time zone to Nepal (Asia/Kathmandu)
date_default_timezone_set('Asia/Kathmandu');
?>

<center><br /><br /><br>
<center><h3 style="background-color:red;width:1100px">Current Date</h3></center>
<h3 style="background-color:#1e7c9a; width:1100px">
    <?php echo date("D d M Y"); ?>
</h3> 
</center>
<img src="sunrise/contrast.jpg" alt="Smiley face" style="float:middle" width="1350" height="450" />
