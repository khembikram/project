<?php
include "connection.php";
include "header.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
date_default_timezone_set("Asia/Kathmandu");


print $script_tz = date('h');
?> 
<br/>
<br />
<body>
<center>
    <h3 style="background-color:#FF5F00;width:500px;margin:10px; border-radius:10px;">Intern Information</h3>
</center>
<center>
    <table border="1" width="800">
        <tr style="background-image:url(image/blue-gradient-background-css-7110.jpg);color:white;">
            <td width="15%" style="font-weight:bold;"><center>Intern Code</center></td>
            <td width="15%" style="font-weight:bold;"><center>Name of Intern</center></td>
            <td width="15%" style="font-weight:bold;"><center>Name of Institution</center></td>
            <td width="15%" style="font-weight:bold;"><center>Academic Qualification</center></td>
            <td width="15%" style="font-weight:bold;"><center>Address</center></td>
            <td width="15%" style="font-weight:bold;"><center>Phone No.</center></td>
        </tr>

        <?php
        $getemployeecode = $_POST['employeecode'];
        $query = "SELECT * FROM intern_info WHERE employeecode='$getemployeecode'";
        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['employeecode']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['institution']."</td>";
            echo "<td>".$row['academic_qualification']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['phone_no']."</td>";
            echo "</tr>";
        }
        ?>

    </table>
</center>
</body>
</html>
