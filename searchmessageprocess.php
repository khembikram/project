<?php
include "connection.php";
include "header.php";
?>

<br/><br/><br/><br/>
<body>
    <center>
        <table border="0" width="800" height="100" background="image/Untitled-1.jpg">
            <tr style="background-image:url(image/blue-gradient-background-css-7110.jpg);width:600px;margin:10px; border-radius:10px;">
                <td><center>Name</center></td>
                <td><center>Message</center></td>
                <td><center>Entry Date and Time</center></td>
            </tr>

            <?php
            $name = $_POST['name'];
            $query = "SELECT * FROM message WHERE name='$name'";
            $result = mysqli_query($db, $query);

            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "</tr>";
            }
            ?>

        </table>
        <br />

        <?php
        if(isset($_GET['msg'])){
            echo $_GET['msg'];
        }
        ?>
    </center>
</body>
</html>
