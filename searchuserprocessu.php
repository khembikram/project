<?php
session_start();
date_default_timezone_set("Asia/Kathmandu");
include_once "connection.php";
include "headeru.php";
?>

<title>Search Individual Attendance</title>
</head>
<body>
<br /><br />

<center><h2 style="background-color:#FF5F00; width:500px; margin:25px; border-radius:10px;"> Individual Attendance Report</h2></center>

<table border="0" width="900" margin:5px border-radius:5px >
    <tr style="background-image:url(image/blue-gradient-background-css-7110.jpg); color:black;">
        <th>Id</th>
        <th>User Name</th>
        <th>User Type</th>
        <th>Login Date</th>
        <th>Login Time</th>
        <th>Logout Time</th>
    </tr>

    <?php
    $getUser = $_POST['userid'];
    $q = "SELECT * FROM user_attendance WHERE username='$getUser'";
    $rs = mysqli_query($db, $q);

    if (!$rs) {
        echo "Error executing the query: " . mysqli_error($db);
        exit();
    }

    while ($row = mysqli_fetch_assoc($rs)) {
        print "<tr>";
        print "<td>" . $row['id'] . "</td>";
        print "<td>" . $row['username'] . "</td>";
        print "<td>" . $row['usertype'] . "</td>";
        print "<td>" . $row['logindate'] . "</td>";
        print "<td>" . $row['logintime'] . "</td>";
        print "<td>" . $row['logouttime'] . "</td>";
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
</body>
</html>
