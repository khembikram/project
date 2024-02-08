<?php
include "connection.php";
include "header.php";
?>

<br>
<br>
<br>
<center>
    <h3 style="background-color:#FF5F00;width:500px;margin:10px;height:30px; border-radius:10px;"><b>View Stored Messages</b></h3>
</center>
<br>

<center>
    <table border="0" width="800" height="200" background="image/Untitled-1.jpg">
        <tr style="background-image:url(image/blue-gradient-background-css-7110.jpg); color:black;">
            <td>
                <center>Name</center>
            </td>
            <td>
                <center>Message</center>
            </td>
            <td>
                <center>Entry Date and Time</center>
            </td>
        </tr>

        <?php
        $q = "SELECT * FROM message ORDER BY entrydate ASC";
        $result = mysqli_query($db, $q);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['content'] . "</td>";
                echo "<td>" . $row['entrydate'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "Error: " . mysqli_error($db);
        }

        mysqli_close($db);
        ?>
    </table>
</center>
</body>
</html>
