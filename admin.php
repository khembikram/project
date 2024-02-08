<?php
include "connection.php";
include "header.php";
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/user.css" />
</head>

<div id="content">
    <div id="left-content">
        <form method="post" action="add_user.php" id="form1">
            <h2>ADD ADMIN USER</h2>

            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>

            <p>User</p>
            <p><input type="text" name="username" required="required"></p>
            <p>Password</p>
            <p><input type="password" name="userpassword" required="required"></p>
            <input type="hidden" name="usertype" value="admin">
            <p><input type="submit" name="add" value="Add"></p>
        </form>
    </div>

    <div id="right-content">
        <h1>Available Admin Users</h1>
        <table>
            <tr>
                <th>Username</th>
                <th>Action</th>
            </tr>
            <?php
            $sel = "SELECT * FROM user_table WHERE usertype='admin'";
            $result = mysqli_query($conn, $sel);

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td><a href='deleteuser.php?id=" . $row['ID'] . "'><button>DELETE</button></a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>
