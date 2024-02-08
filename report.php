<?php
include "connection.php";
include "header.php";
ini_set('display_errors', 0);
include "checksession.php";
?>

<head>
<link rel="shortcut icon" href="image/fdm.jpg"/>
</head>
	<body>
	<center><h2 style="background-color:#FF5F00; width:500px; margin:25px; border-radius:10px;">Attendance Report</h2></center>
    
	<table border="0" width="1000" background="image/Untitled-1.jpg">
    <tr style="background-image:url(image/blue-gradient-background-css-7110.jpg); color:black; height:30px; font-size:20px; font-family:'Times New Roman', Times, serif;">
    <th>Id</th>
    <th>User Name</th>
	<th>User Type</th>
    <th>Login Date</th>
    <th>Login Time</th>
    <th>Logout Time</th>

    </tr>
    <?php
   $q = "SELECT * FROM user_attendance ORDER BY id DESC";
   $rs = mysqli_query($db, $q);
   
   if (!$rs) {
       echo "Error executing the query: " . mysqli_error($db);
       exit();
   }
   
   while ($row = mysqli_fetch_assoc($rs)) {
       print "<tr>";
       print "<td>" . "<center>" . $row['id'] . "</center>" . "</td>";
       print "<td>" . "<center>" . $row['username'] . "</center>" . "</td>";
       print "<td>" . "<center>" . $row['usertype'] . "</center>" . "</td>";
       print "<td>" . "<center>" . $row['logindate'] . "</center>" . "</td>";
       print "<td>" . "<center>" . $row['logintime'] . "</center>" . "</td>";
       print "<td>" . "<center>" . $row['logouttime'] . "</center>" . "</td>";
       print "</tr>";
   }
   ?>
   
</table>
</center>
    </body>
</html>
