<?php
session_start();
include "connection.php";
include "header.php";
?>

<?php
if (isset($_GET['employeecode'])) {
    $getemployeecode = $_GET['employeecode'];
    $q = "DELETE FROM intern_info WHERE employeecode='" . $getemployeecode . "'";
    $rs = mysqli_query($db, $q);
    if ($rs) {
        header("Location: deletingintern.php?msg=Information Has Been Deleted....");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Deleting Intern Info..</title>
</head>
<body>
    <br />
    <br />
    <center>
        <h2 style="background-color:#FF5F00;width:500px;margin:20px; border-radius:10px;">Delete Intern Information</h2>
    </center><br>
    <center>
        <table border="0" width="900" height="50">
            <tr style="background-image:url(image/blue-gradient-background-css-7110.jpg); color:black;">
                <td width="15%" style="font-weight:bold;"><center>Code</center></td>
                <td width="15%" style="font-weight:bold;"><center>Name</center></td>
                <td width="15%" style="font-weight:bold;"><center>Institution</center></td>
                <td width="15%" style="font-weight:bold;"><center>Academic Qualification</center></td>
                <td width="15%" style="font-weight:bold;"><center>Address</center></td>
                <td width="15%" style="font-weight:bold;"><center>Phone No.</center></td>
                <td width="7.5%" style="font-weight:bold;"><center>Update</center></td>
                <td width="7.5%" style="font-weight:bold;"><center>Delete</center></td>
            </tr>
            <?php
            $q = "SELECT * FROM intern_info";
            $rs = mysqli_query($db, $q);
            while ($row = mysqli_fetch_array($rs)) {
                print "<tr>";
                print "<td>" . $row['employeecode'] . "</td>";
                print "<td>" . $row['name'] . "</td>";
                print "<td>" . $row['institution'] . "</td>";
                print "<td>" . $row['academic_qualification'] . "</td>";
                print "<td>" . $row['address'] . "</td>";
                print "<td>" . $row['phone_no'] . "</td>";
                print "<td><a href=editintern.php?employeecode=" . $row['employeecode'] . ">Update</a></td>";
                print "<td><a href=deleteintern.php?employeecode=" . $row['employeecode'] . ">Delete</a></td>";
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
