<?php
// Set the timezone to Nepal time (Asia/Kathmandu)
date_default_timezone_set("Asia/Kathmandu");

include_once "connection.php";
include "headeru.php";
?>

<head>
    <link rel="shortcut icon" href="image/fdm.jpg" />
</head>
<body>
    <center>
        <h2 style="background-color:#FF5F00; width:500px; margin:25px; border-radius:10px;"> Attendance Report</h2>
    </center>

    <table border="0" width="900" background="image/Untitled-1.jpg">
        <tr style="background-image:url(image/blue-gradient-background-css-7110.jpg); color:black; height:30px; font-size:20px; font-family:'Times New Roman', Times, serif;">
            <th>Id</th>
            <th>User Name</th>
            <th>User Type</th>
            <th>Login Date</th>
            <th>Login Time</th>
            <th>Logout Time</th>
        </tr>
        <?php
        $q = "SELECT * FROM user_attendance ORDER BY ID DESC";
        $rs = mysqli_query($db, $q);

        while ($row = mysqli_fetch_assoc($rs)) {
            $userId = isset($row['ID']) ? $row['ID'] : '';
            $userName = isset($row['username']) ? $row['username'] : '';
            $userType = isset($row['usertype']) ? $row['usertype'] : '';
            $loginDate = isset($row['logindate']) ? $row['logindate'] : '';
            $loginTime = isset($row['logintime']) ? $row['logintime'] : '';
            $logoutTime = isset($row['logouttime']) ? $row['logouttime'] : '';

            // Format the date and time if not null
            if ($loginDate !== '0000-00-00') {
                $loginDate = date("Y-m-d", strtotime($loginDate));
            }

            if ($loginTime !== '00:00:00') {
                $loginTime = date("h:i:s A", strtotime($loginTime));
            }

            if ($logoutTime !== '00:00:00') {
                $logoutTime = date("h:i:s A", strtotime($logoutTime));
            }

            // Display the data in the table rows
            echo "<tr>";
            echo "<td><center>$userId</center></td>";
            echo "<td><center>$userName</center></td>";
            echo "<td><center>$userType</center></td>";
            echo "<td><center>$loginDate</center></td>";
            echo "<td><center>$loginTime</center></td>";
            echo "<td><center>$logoutTime</center></td>";
            echo "</tr>";
        }
        ?>
    </table>
    </center>
</body>
</html>
