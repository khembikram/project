<?php
include "connection.php";
include "header.php";
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/user.css" />
</head>

<div id="content">
    <div id="left-content">
        <!-- Add User Form -->
        <form method="post" action="add_user.php" id="form1">
            <h2>ADD USER</h2>
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
            <!-- The usertype field is set to 'user' by default -->
            <input type="submit" name="submit" value="Add User">
        </form>
    </div>
    <div id="right-content">
        <h1>Available Users</h1>
        <h2>Admin Users</h2>
        <table>
            <tr>
                <th>Username</th>
            </tr>
            <?php
            $sel = "SELECT * FROM user_table WHERE usertype='admin'";
            $result = mysqli_query($db, $sel);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['username'] . "</td></tr>";
            }
            ?>
        </table>

        <h2>Regular Users</h2>
        <table>
            <tr>
                <th>Username</th>
                <th>Action</th>
            </tr>
            <?php
            $sel = "SELECT * FROM user_table WHERE usertype='user'";
            $result = mysqli_query($db, $sel);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td><a href='deleteuser.php?id=" . $row['id'] . "'><button>DELETE</button></a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>
