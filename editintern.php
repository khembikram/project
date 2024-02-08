<?php
include "connection.php";
include "header.php";

if (isset($_GET['employeecode'])) {
    $id = $_GET['employeecode'];
    $q = "SELECT * FROM intern_info WHERE employeecode='$id'";
    $result = mysqli_query($db, $q);

    // Check if the query returned any rows
    if (mysqli_num_rows($result) > 0) {
        // Fetch the row from the result
        $row = mysqli_fetch_array($result);
    } else {
        // Redirect to the updateintern.php page if no row found
        header('location:updateintern.php?page=1');
        exit(); // Make sure to exit after redirecting
    }
} else {
    header('location:updateintern.php?page=1');
    exit(); // Make sure to exit after redirecting
}
?>

<br>
<br>
<br>
<form method="post" action="editinternpro.php">
<center>
<h2 style="background-color:#FF5F00;width:500px;margin:10px; border-radius:10px;">Update Intern</h2><br/>
<table border="0"  height="300" width="400">
<tr>
	<td>Intern Code</td>
    <td><input type="text" name="employeecode" value="<?php echo isset($row['employeecode']) ? $row['employeecode'] : ''; ?>"/></td>
</tr>
<tr>
	<td>Name of Intern</td>
    <td><input type="text" name="intern" value="<?php echo isset($row['intern']) ? $row['intern'] : ''; ?>"  /></td>
</tr>
<tr>
	<td>Name of Institution</td>
    <td><input type="text" name="institution" value="<?php echo isset($row['institution']) ? $row['institution'] : ''; ?>"></td>
</tr>
<tr>
	<td>Academic Qualification</td>
    <td><input type="text"  name="academic_qualification" value="<?php echo isset($row['academic_qualification']) ? $row['academic_qualification'] : ''; ?>"></td>
</tr>
<tr>
	<td>Address</td>
    <td><input type="text" name="address" value="<?php echo isset($row['address']) ? $row['address'] : ''; ?>"></td>
</tr>
<tr>
	<td>Phone No.</td>
    <td><input type="text" name="phone_no"  value="<?php echo isset($row['phone_no']) ? $row['phone_no'] : ''; ?>"/></td>
</tr>
<tr>
	<td colspan="2"><input type="submit" value="Update" name="submit" /></td>
</tr>
</table>
</center>
</form>
</body>
</html>
