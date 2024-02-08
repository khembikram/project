<?php 

include "connection.php";
ini_set('display_errors',1);
include "headeru.php";

			print "<center>"."<br/>"."<br/>"."</center>"."<br/>";
  			print "<center>"."<b>"."WELCOME "."&nbsp"."&nbsp". $_SESSION['sess_abc']."&nbsp"."&nbsp".$_SESSION['sess_user']."!"."</b>"."</center>"."<br/>";
 			print "<center>"."Login Time: ".$_SESSION['sess_date']."</center>"."<br/>";
 			print "<center>"."Login Date: ".$_SESSION['sess_year']."<center>"."<br/>";
			print "<center>"."Your Attendance Has Been Taken Successfully."."<center>";
			
			?> 