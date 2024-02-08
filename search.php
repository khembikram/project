<?php

include "connection.php";
include "header.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Intern Information</title>

<body>

<div style="background-image:url(image/Untitled-1.jpg);height:100px;width:400px;margin-top:100px;border-radius:20px;">
	
<br /><br />
<center>
<form method="post" action="searchprocess.php">
	<table>
    	<tr>
        	<td>Intern Code</td>
            <td><input type="text" name="employeecode" /><span style="font-size:12px;">To view Intern Information</span></td>
        </tr>
        <tr>
        	<td colspan="2"><input type="submit" value="Search" /></td>
        </tr>
    </table>
</form></center>
</body>
</html>