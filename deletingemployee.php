<?php
include "connection.php";
include "header.php";

if (isset($_GET['employeecode'])) {
    $employeecode = $_GET['employeecode'];

    // Create a prepared statement
    $stmt = $db->prepare("DELETE FROM employee_info WHERE Employee_Code = ?");
    $stmt->bind_param("s", $employeecode);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: deleteemployee.php?msg=Information%20Has%20Been%20Deleted");
        exit;
    } else {
        echo "Error deleting employee: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
?>

<title>Deleting Employee Info..</title>

<body>
<br />
<br />
<center><h3 style="background-color:#FF5F00;width:500px;margin:10px; border-radius:10px;">Delete Employee Information</h3></center>
<br>
<center>
    <table border="0" width="800" background="image/Untitled-1.jpg">
        <tr style="background-image:url(image/blue-gradient-background-css-7110.jpg); color:black;">
            <td width="3%" style="font-weight:bold;"><center>Salutation</center></td>
            <td width="3%" style="font-weight:bold;"><center>Employee Code</center></td>
            <td width="3%" style="font-weight:bold;"><center>First Name</center></td>
            <td width="3%" style="font-weight:bold;"><center>Middle Name</center></td>
            <td width="3%" style="font-weight:bold;"><center>Last Name</center></td>
            <td width="3%" style="font-weight:bold;"><center>Gender</center></td>
            <td width="3%" style="font-weight:bold;"><center>Marital Status</center></td>
            <td width="3%" style="font-weight:bold;"><center>Position</center></td>
            <td width="3%" style="font-weight:bold;"><center>Delete</center></td>
        </tr>

        <?php
        $q = "SELECT * FROM employee_info";
        $result = mysqli_query($db, $q);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['Salutation'] . "</td>";
                echo "<td>" . $row['Employee_Code'] . "</td>";
                echo "<td>" . $row['First_Name'] . "</td>";
                echo "<td>" . $row['Middle_Name'] . "</td>";
                echo "<td>" . $row['Last_Name'] . "</td>";
                echo "<td>" . $row['Gender'] . "</td>";
                echo "<td>" . $row['Marital_Status'] . "</td>";
                echo "<td>" . $row['Position'] . "</td>";
                echo "<td><a href=\"deleteemployee.php?employeecode=" . $row['Employee_Code'] . "\">Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "Error: " . mysqli_error($db);
        }

        mysqli_close($db);
        ?>
    </table>
</center>

<?php
if (isset($_GET['msg'])) {
    echo $_GET['msg'];
}
?>
