<?php
include "connection.php";
include "header.php";

if (isset($_POST['submit'])) {  // Changed from 'add' to 'submit'
    $user = mysqli_real_escape_string($db, $_POST['username']);  // Changed '$conn' to '$db'
    $pass = mysqli_real_escape_string($db, $_POST['userpassword']);  // Changed '$conn' to '$db'

    $ins = "INSERT INTO user_table (username, userpassword,usertype) VALUES ('$user', '$pass','user')";
    $result = mysqli_query($db, $ins);  // Changed '$conn' to '$db'

    if ($result) {
        $_SESSION['msg'] = "User added";
        header('location:user.php');
        exit();
    } else {
        $_SESSION['msg'] = "Failed to add user";
        header('location:user.php');
        exit();
    }
}
?>

<!-- HTML form for user input -->
<form method="POST" action="add_user.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <label for="userpassword">Password:</label>
    <input type="password" name="userpassword" id="userpassword">
    <input type="submit" name="submit" value="Add User">  <!-- Changed from 'add' to 'submit' -->
</form>

<!-- Rest of your HTML content -->
