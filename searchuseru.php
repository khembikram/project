<?php
include "connection.php";
include "headeru.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seach Individual attendence</title>

<body>
<div style="background-image:url(image/Untitled-1.jpg);height:100px;width:400px;margin-top:100px;border-radius:20px;">
<br />
<br />
<center>
<form method="post" action="searchuserprocessu.php">
	<table>
    
        	<td>Username</td>
            <td><input type="text" name="userid" /><span style="font-size:12px;">To view attendence</span></td>
        </tr>
        <tr>
        	<td colspan="2"><input type="submit" value="Search" /></td>
        </tr>
    </table>
</form>
</center>
</body>
</html>