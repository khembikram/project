<?php
include "connection.php";
include "header.php";

// Establish database connection
$db_host = "localhost";
$db_name = "db_attend";
$db_user = "root";
$db_password = "";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<body>
<br />
<br />
<center><center><h3 style="background-color:#FF5F00;width:500px;margin:10px; border-radius:10px;">Update Employee Information</h3></center>

<br/>
<center><table border="0" width="800" background="image/Untitled-1.jpg">
<tr style="background-image:url(image/blue-gradient-background-css-7110.jpg); color:black;">
<th><center>Saluation</center></th>
<th><center>Employee Code</center></th>
<th><center>First Name</center></th>
<th><center>Middle Name</center></th>
<th><center>Last Name</center></th>
<th><center>Gender</center></th>
<th><center>Marital Status</center></th>
<th><center>Position</center></th>
<th><center>Update</center></th>
</tr>

<?php
$q = "SELECT * FROM employee_info ORDER BY Employee_Code DESC";
$result = $conn->query($q);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Salutation'] . "</td>";
        echo "<td>" . $row['Employee_Code'] . "</td>";
        echo "<td>" . $row['First_Name'] . "</td>";
        echo "<td>" . $row['Middle_Name'] . "</td>";
        echo "<td>" . $row['Last_Name'] . "</td>";
        echo "<td>" . $row['Gender'] . "</td>";
        echo "<td>" . $row['Marital_Status'] . "</td>";
        echo "<td>" . $row['Position'] . "</td>";
        echo "<td><a href='editemployee.php?employeecode=" . $row['Employee_Code'] . "'>Update</a></td>";
        echo "</tr>";
    }
}

$conn->close();
?>
</table>
</body>
</html>
