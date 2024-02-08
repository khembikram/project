<?php
include "connection.php";
include "header.php";

if (isset($_POST['submit'])) {
    $getsalutation = $_POST['Salutation'];
    $getemployeecode = $_POST['employeecode'];
    $getfirstname = $_POST['firstname'];
    $getmiddlename = $_POST['middlename'];
    $getlastname = $_POST['lastname'];
    $getgender = $_POST['gender'];
    $getmaritalstatus = $_POST['maritalstatus'];
    $getposition = $_POST['position'];

   
    $stmt = $db->prepare("UPDATE employee_info SET Salutation=?, First_Name=?, Middle_Name=?, Last_Name=?, Gender=?, Marital_Status=?, Position=? WHERE Employee_Code=?");
    $stmt->bind_param("ssssssss", $getsalutation, $getfirstname, $getmiddlename, $getlastname, $getgender, $getmaritalstatus, $getposition, $getemployeecode);

    if ($stmt->execute()) {
        echo "<br><br><br>Record Has Been Updated....";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}
?>
</body>
</html>
