<?php
include "header.php";
include "connection.php";

// Use $_GET['employeecode'] for security reasons
if (isset($_GET['employeecode'])) {
    $id = $_GET['employeecode'];
    $q = "SELECT * FROM employee_info WHERE Employee_Code='$id'";
    $result = $db->query($q);

    // Check if the query was successful
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        // Redirect to the updateemployee.php page if the employee code is not found
        header('location:updateemployee.php?page=1');
        exit(); // Make sure to exit after a header redirect
    }
} else {
    header('location:updateemployee.php?page=1');
    exit();
}
?>

<body>
    <br>
    <br>
    <br>
    <form method="post" action="editemployeepro.php">
        <center>
            <h3 style="background-color:#FF5F00;width:400px;margin:10px; border-radius:10px;height:35px; padding:5px; font-size:25px;">Employee Information Entry</h3>
        </center>
        <br />
        <center>
            <table border=0 height="300" width="600">
                <tr>
                    <td>Salutation:</td>
                    <td>
                        <select name="Salutation">
                            <option value="" selected="selected">--Select--</option>
                            <option value="Dr." <?php if ($row['Salutation'] == 'Dr.') echo 'selected'; ?>>Dr.</option>
                            <option value="Er." <?php if ($row['Salutation'] == 'Er.') echo 'selected'; ?>>Er.</option>
                            <option value="Mr." <?php if ($row['Salutation'] == 'Mr.') echo 'selected'; ?>>Mr.</option>
                            <option value="Mrs." <?php if ($row['Salutation'] == 'Mrs.') echo 'selected'; ?>>Mrs.</option>
                            <option value="Ms" <?php if ($row['Salutation'] == 'Ms') echo 'selected'; ?>>Ms.</option>
                            <option value="Prof." <?php if ($row['Salutation'] == 'Prof.') echo 'selected'; ?>>Prof.</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Employee Code:</td>
                    <td><input type="text" name="employeecode" value="<?php echo $row['Employee_Code']; ?>" readonly /></td>
                </tr>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="firstname" value="<?php echo $row['First_Name']; ?>" /></td>
                </tr>
                <tr>
                    <td>Middle Name:</td>
                    <td><input type="text" name="middlename" value="<?php echo $row['Middle_Name']; ?>" /></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lastname" value="<?php echo $row['Last_Name']; ?>" /></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <select name="gender">
                            <option value="" selected="selected">--Select--</option>
                            <option value="Male" <?php if ($row['Gender'] == 'Male') echo 'selected'; ?>>Male</option>
                            <option value="Female" <?php if ($row['Gender'] == 'Female') echo 'selected'; ?>>Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Marital Status:</td>
                    <td>
                        <select name="maritalstatus">
                            <option value="" selected="selected">--Select--</option>
                            <option value="married" <?php if ($row['Marital_Status'] == 'married') echo 'selected'; ?>>Married</option>
                            <option value="unmarried" <?php if ($row['Marital_Status'] == 'unmarried') echo 'selected'; ?>>Unmarried</option>
                            <option value="Divorced" <?php if ($row['Marital_Status'] == 'Divorced') echo 'selected'; ?>>Divorced</option>
                            <option value="Widowed" <?php if ($row['Marital_Status'] == 'Widowed') echo 'selected'; ?>>Widowed</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Position:</td>
                    <td>
                        <select name="position">
                            <option value="" selected="selected">--Select--</option>
                            <option value="Manager" <?php if ($row['Position'] == 'Manager') echo 'selected'; ?>>Manager</option>
                            <option value="Officer" <?php if ($row['Position'] == 'Officer') echo 'selected'; ?>>Officer</option>
                            <option value="Supervisor" <?php if ($row['Position'] == 'Supervisor') echo 'selected'; ?>>Supervisor</option>
                            <option value="Assistant" <?php if ($row['Position'] == 'Assistant') echo 'selected'; ?>>Assistant</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Update" name="submit" />
                        <input type="reset" value="Clear" name="reset" />
                    </td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>
