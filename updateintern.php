<?php
include "connection.php";
include "header.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intern Information</title>
</head>
<body>
<br />
<center><h3 style="background-color:#FF5F00;width:500px;margin:10px; border-radius:10px;">Update Intern Information</h3></center>
<center>
    <table border="0" width="900">
        <tr style="background-image:url(image/blue-gradient-background-css-7110.jpg); color:black;">
            <th><center>Code</center></th>
            <th><center>Name</center></th>
            <th><center>Institution</center></th>
            <th><center>Academic Qualification</center></th>
            <th><center>Address</center></th>
            <th><center>Phone No.</center></th>
            <th><center>Update</center></th>
        </tr>
        <?php
        $q = "SELECT * FROM intern_info";
        $rs = mysqli_query($db, $q);
       
while ($row = mysqli_fetch_assoc($rs)) {
    print "<tr>";
    print "<td>" . $row['employeecode'] . "</td>";
    print "<td>" . $row['name'] . "</td>"; // Use 'name' instead of 'intern'
    print "<td>" . $row['institution'] . "</td>";
    print "<td>" . $row['academic_qualification'] . "</td>"; // Use 'academic_qualification' instead of 'academicqualification'
    print "<td>" . $row['address'] . "</td>";
    print "<td>" . $row['phone_no'] . "</td>"; // Use 'phone_no' instead of 'phone'
    print "<td><a href='editintern.php?employeecode=" . $row['employeecode'] . "'>Update</a></td>";
    print "</tr>";
}


        ?>
    </table>
    <br />
    <?php
    if (isset($_GET['msg'])) {
        print $_GET['msg'];
    }
    ?>
</center>
</body>
</html>
