<?php
include "connection.php";
include "header.php";

$getemployeecode = $_POST['employeecode'];
$q = "SELECT * FROM employee_info WHERE Employee_Code = '$getemployeecode'";
$result = mysqli_query($db, $q);

if ($result) {
    ?>

    <br /><br/>
    <center><h3 style="background-color:#FF5F00;width:500px;margin:10px; border-radius:10px;"><b>Employee Information</b></h3></center>
    <center><table border="0" width="800" background="image/Untitled-1.jpg">
    <tr style="background-image:url(image/blue-gradient-background-css-7110.jpg);color:white;">
        <td width="5%" style="font-weight:bold;"><center>Saluation</center></td>
        <td width="7%" style="font-weight:bold;"><center>Employee Code</center></td>
        <td width="4%" style="font-weight:bold;"><center>First Name</center></td>
        <td width="5%" style="font-weight:bold;"><center>Middle Name</center></td>
        <td width="7%" style="font-weight:bold;"><center>Last Name</center></td>
        <td width="7%" style="font-weight:bold;"><center>Gender</center></td>
        <td width="5%" style="font-weight:bold;"><center>Marital Status</center></td>
        <td width="9%" style="font-weight:bold;"><center>Position</center></td>
    </tr>

    <?php
    while ($row = mysqli_fetch_array($result)) {
        print "<tr>";
        print "<td>".$row[0]."</td>";
        print "<td>".$row[1]."</td>";
        print "<td>".$row[2]."</td>";
        print "<td>".$row[3]."</td>";
        print "<td>".$row[4]."</td>";
        print "<td>".$row[5]."</td>";
        print "<td>".$row[6]."</td>";
        print "<td>".$row[7]."</td>";
        print "</tr>";
    }
    ?>
    </table>
    </body>
    </html>
    <?php
} else {
    echo "Query failed: " . mysqli_error($db);
}
?>
