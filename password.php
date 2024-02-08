<?php
session_start();
include "connection.php";
include "header.php";

if (isset($_POST['submit'])) {
    $user = $_SESSION['sess_user'];
    $pass = $_POST['pass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];

    $sel = "SELECT * FROM user_table WHERE username='$user'";
    $query = mysqli_query($db, $sel);

    if ($query) {
        $row = mysqli_fetch_assoc($query);
        if ($pass == $row['userpassword']) {
            if ($npass == $cpass) {
                $upd = "UPDATE user_table SET userpassword='$cpass' WHERE username='$user'";
                $query = mysqli_query($db, $upd);
                if ($query) {
                    echo $changed = "Password Changed";
                }
            } else {
                echo "Failed to match password";
            }
        } else {
            echo "Password mismatched";
        }
    }
}
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/password.css" />
</head>
<script type="text/javascript" src="js/validation.js"></script>

<div id="content">
    <form method="post" action="password.php" onSubmit="return valid();" id="form1">
        <p id="error" style="font-style: italic; margin-top: 15px; font-size: 15px; color: #900;"></p>
        <p>Username</p>
        <p><input type="text" name="uname" value="<?php echo $_SESSION['sess_user']; ?>" disabled="disabled"></p>
        <p>Old Password</p>
        <p><input type="password" name="pass" id="pass" /></p>
        <p><hr/></p>
        <p>New Password</p>
        <p><input type="password" name="npass" id="npass" /></p>
        <p>Confirm Password</p>
        <p><input type="password" name="cpass" id="cpass" /></p>
        <p><input type="submit" name="submit" value="Change Password" /></p>
    </form>
</div>
