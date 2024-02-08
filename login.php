<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Attendance System</title>
    <link rel="shortcut icon" href="image/fdm.jpg"/>
    <link rel="stylesheet" type="text/css" href="css/indexstyle.css"/>
</head>
<body>
<?php
session_start();
include_once "connection.php";
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $getUser = isset($_POST['userid']) ? $_POST['userid'] : null;
    $getPass = isset($_POST['userpsw']) ? $_POST['userpsw'] : null;
    $getRole = isset($_POST['usertype']) ? $_POST['usertype'] : null;

    $query = "SELECT * FROM user_table WHERE username='$getUser' AND userpassword='$getPass' AND usertype='$getRole'";
    $result = $db->query($query);

    if (!$result) {
        echo "Error executing the query: " . $db->error;
        exit();
    }

    $numRows = $result->num_rows;


    if ($numRows > 0) {
        if ($getRole === 'Admin') {
            $_SESSION['admin'] = '1';
        } else {
            $_SESSION['admin'] = '0';
        }

        $date = date('h:i:s');
        $yr = date('Y-m-d');

        // Prepare the SQL statement
        $stmt = $db->prepare("INSERT INTO user_attendance(username, logindate, logintime, usertype) VALUES (?, ?, ?, ?)");

        // Bind the parameters
        $stmt->bind_param("ssss", $getUser, $yr, $date, $getRole);

        // Execute the statement
        if ($stmt->execute()) {
            // Insertion successful

            $_SESSION['sess_user'] = $getUser;
            $_SESSION['sess_date'] = $date;
            $_SESSION['sess_year'] = $yr;
            $_SESSION['sess_abc'] = $getRole;
            $_SESSION['sess_pass'] = $getPass;
            $_SESSION['sess_ip'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['sess_lastid'] = $db->insert_id;

            if ($_SESSION['admin'] == '1') {
                header("Location: admindashboard.php");
            } else {
                header("Location: userdashboard.php");
            }
            exit();
        } else {
            // Insertion failed
            echo "Error inserting data: " . $stmt->error;
        }
    } else {
        echo "Invalid credentials! Please try again.";
    }
}
?>

<form method="post" action="">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <div class="wrapper"></div>
    <div id="head">
        <img src="image/college.jpg" style="object-fit:contain; width: 140px; margin-top:-6px;">
        <h1><span class="red"></span></h1>
        <h2><span class="blue"></span></h2>
        <h3><i><span class="a">Attendance Management System</span></i></h3>
        <div id="content">
            <p><span class="color">Username</span></p>
            <p><input type="text" name="userid" required="required" placeholder="Enter your name"></p>

            <p><span class="color">Password</span></p>
            <p><input type="password" name="userpsw" required="required" placeholder="Enter your password"/></p>

            <p><span class="color">User Type</span></p>
            <p>
                <select name="usertype" required="required" border="none">
                    <option value="">------Select------</option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
            </p>

            <input type="submit" value="Login" name="submit"/>
            <p><a href="forgetpassword.php"><i><span class="white">Forgot Password??</span></i></a></p>
        </div>
    </div>
</form>
</body>
</html>