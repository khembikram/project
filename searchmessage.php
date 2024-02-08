<?php

include "connection.php";
include "header.php";

?>


<div style="background-image:url(image/Untitled-1.jpg);height:100px;width:400px;margin-top:100px;border-radius:20px;">
	
<br /><br />
<center>
<form method="post" action="searchmessageprocess.php">
	<table>
    	<tr>
        	<td>Name</td>
            <td><input type="text" name="name" /><span style="font-size:12px;">To view message</span></td>
        </tr>
        <tr>
        	<td colspan="2"><input type="submit" value="Search" /></td>
        </tr>
    </table>
</form></center>
</body>
</html>