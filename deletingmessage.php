<?php
include "connection.php";
include "header.php";
?>

<br />
<br />
<center><h3 style="background-color:#FF5F00;width:500px;margin:10px; border-radius:10px;"><b>Delete Your Message</b></h3></center><br>
<center>
    <table border="0" width="800" height="100" background="image/Untitled-1.jpg">
        <tr style="background-image:url(image/blue-gradient-background-css-7110.jpg); color:black;">
            <td>Name</td>
            <td>Message</td>
            <td>Entry Date and Time</td>
            <td>Delete Message</td>
        </tr>
        <?php
        $q = "SELECT * FROM message ORDER BY entrydate ASC";
        $stmt = mysqli_prepare($db, $q);

        if ($stmt) {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['content']."</td>"; // Assuming the column name is 'content'
                echo "<td>".$row['entrydate']."</td>";
                echo "<td>"."<a href='deletemessage.php?name=".$row['name']."'>Delete</a>"."</td>";
                echo "</tr>";
            }

            mysqli_stmt_close($stmt);
        } else {
            die("Error in the query: " . mysqli_error($db));
        }
        ?>
    </table>
</center>
<br />

<?php
if (isset($_GET['msg'])) {
    echo $_GET['msg'];
}
?>
</body>
</html>
