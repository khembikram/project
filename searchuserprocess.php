<?php
date_default_timezone_set("Asia/Kathmandu");
include "connection.php";
include "header.php";
?>

<title>Search Individual Attendance</title>
</head>
<body>
<br /><br />
<center><h3 style="background-color:#FF5F00;width:500px; border-radius:10px">Individual Attendance Report</h3></center>
 <center><br/><br/>
	<table border="0" width="800" style="border-radius:10px">
    <tr style="background-image:url(image/blue-gradient-background-css-7110.jpg);width:500px;margin-top:10px;border-radius:10px">
        <th>Id</th>
        <th>User Name</th>
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
    } else {
        while ($row = mysqli_fetch_assoc($rs)) {
            echo "<tr>";
            echo "<td>" . "<center>" . $row['id'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['username'] . "<center>" . "</td>";
            echo "<td>" . "<center>" . $row['logindate'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['logintime'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['logouttime'] . "</center>" . "</td>";
            echo "</tr>";
        }
    }
    ?>
</table>
<br />
<?php
if (isset($_GET['msg'])) {
    echo $_GET['msg'];
}
?>
</body>
</html>
