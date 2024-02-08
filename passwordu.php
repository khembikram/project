<?php
session_start();

// database connection using mysqli
include_once 'connection.php';
include "headeru.php";

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    echo "Form submitted"; // Debugging: Check if the form is being submitted

    $user = $_SESSION['sess_user'];
    $pass = $_POST['pass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];

    echo "User: $user, Old Password: $pass, New Password: $npass, Confirm Password: $cpass"; // Debugging: Check the values of variables

    $stmt = $db->prepare("SELECT userpassword FROM user_table WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['userpassword'];
        if (password_verify($pass, $hashedPassword)) {
            if ($npass === $cpass) {
                $hashedNewPassword = password_hash($npass, PASSWORD_DEFAULT);

                $stmt = $db->prepare("UPDATE user_table SET userpassword = ? WHERE username = ?");
                $stmt->bind_param("ss", $hashedNewPassword, $user);
                if ($stmt->execute()) {
                    if ($stmt->affected_rows > 0) {
                        echo "Password Changed";
                        $_SESSION['sess_pass'] = $npass; // Update the session password with the new password
                    } else {
                        echo "Password update failed. No rows affected.";
                    }
                } else {
                    echo "Error updating password: " . $stmt->error;
                }
            } else {
                echo "Failed to match new password and confirm password";
            }
        } else {
            echo "Old password is incorrect";
        }
    } else {
        echo "User not found";
    }
}
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/password.css" />
</head>
<script type="text/javascript" src="js/validation.js"></script>

<div id="content">
    <form method="post" action="password.php" onSubmit="return valid();" id="form1">
        <p id="error" style="font-style:italic; font-size:12px; color:#900;"></p>
        <p>Username</p>
        <p><input type="text" name="uname" value="<?php echo $_SESSION['sess_user']; ?>"></p>
        <p>Old Password</p>
        <p><input type="password" name="pass" id="pass" /></p>
        <p><hr /></p>
        <p>New Password</p>
        <p><input type="password" name="npass" id="npass" /></p>
        <p>Confirm Password</p>
        <p><input type="password" name="cpass" id="cpass" /></p>
        <p><input type="submit" name="submit" value="Change Password" /></p>
    </form>
</div>
