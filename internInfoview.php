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
<head>
    <link rel="shortcut icon" href="image/fdm.jpg" />
</head>
<body>
    <center>
        <h3 style="background-color:#FF5F00; width:500px ;margin:20px; border-radius:10px;"><b>Intern Information Report</b></h3>
    </center><br>
    <center>
        <table border="0" width="950" background="image/Untitled-1.jpg">

            <tr style="background-image:url(image/blue-gradient-background-css-7110.jpg); color:black;">
                <th><center>Code</center></th>
                <th><center>Name</center></th>
                <th><center>Institution</center></th>
                <th><center>Academic Qualification</center></th>
                <th><center>Address</center></th>
                <th><center>Phone No.</center></th>
                <th width="15%" style="font-weight:bold;"><center>Update</center></th>
                <th width="15%" style="font-weight:bold;"><center>Delete</center></th>
            </tr>

            <?php
            $q = "SELECT * FROM intern_info ORDER BY employeecode DESC";
            $result = $conn->query($q);

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['employeecode'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['institution'] . "</td>";
                    echo "<td>" . $row['academic_qualification'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['phone_no'] . "</td>";
                    echo "<td><a href='editintern.php?employeecode=" . $row['employeecode'] . "'>Update</a></td>";
                    echo "<td><a href='deleteintern.php?employeecode=" . $row['employeecode'] . "'>Delete</a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </center>
</body>
</html>
