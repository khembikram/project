<?php
session_start();
date_default_timezone_set("Asia/Kathmandu");
include "connection.php";
ini_set('display_errors',1);
var_dump($_SESSION);
if(isset($_SESSION['setUser']) && ($_SESSION['yes']!=FALSE) && $_SESSION['ses_id'])
{
   if($_SESSION['admin']=='1')
   {
    header("Location:admindashboard.php");
    exit();
	}
	else
	{
	  header("Location:userdashboard.php");
      exit();
	}
	
}
else
{
  header("Location:login.php");
    exit();
}	
	
	
?>
			