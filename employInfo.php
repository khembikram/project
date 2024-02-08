<?php

include "connection.php";
include "header.php";
?><head>
<script type="text/javascript" src="js1/validation.js">
</script>
</head>



<center>
<br/><center> <h2 style="background-color:#FF5F00;width:500px;margin:10px;border-radius:10px;">Employee Information Entry</h2><center><br/>


<form method="post" action="employeeInfoprocess.php" onSubmit="return validation()">
<table border= 0 width="600" height="350" border=""image/Untitled-1.jpg" ;>
	<tr>
    	<td>Saluation:</td>
        <td><select name="Salutation" required="required" id="Salutation">
	<option value="" selected="selected">--Select--</option>
 	 <option value="Dr.">Dr.</option>
 	 <option value="Er.">Er.</option>
 	 <option value="Mr.">Mr.</option>
 	 <option value="Mrs.">Mrs.</option>
 	  <option value="Ms">Ms.</option>
  	  <option value="Prof.">Prof.</option>
	</select>
	</td>
 <tr>
    	<td>Employee Code:</td>
        <td><input type="text" name="employeecode" required="required"/></td>
		</tr>
   
    <tr>
    	<td>First Name:</td>
        <td><input type="text" name="firstname" required="required"/></td>
		</tr>
		<tr>
    	<td>Middle Name:</td>
        <td><input type="text" name="middlename"/></td>
		</tr>
		<tr>
   		<td>Last Name:</td>
        <td><input type="text" name="lastname" required="required"/></td>
    </tr>
    <tr>
	<td>Gender :</td>
	<td><select name="gender" required="required">
	 <option value="Male">Male</option>
			   <option value="Female">Female</option>
        	 </select></td>
	</tr>

	 
  
	 <tr>
    	<td>Marital Status:</td>
		 <td><select name="maritalstatus" required="required">
			<option value="" selected="selected">--Select--</option>
             <option value="married">Married</option>
             <option value="unmarried">Unmarried</option>
			  <option value="Divorced">Divorced</option>
			   <option value="Widowed">Widowed</option>
        	 </select>
            </td>
    </tr>
    
    
    <tr>
    	<td>Position:</td>
        <td><select name="position" required="required">
	<option value="" selected="selected">--Select--</option>
  <option value="Manager">Manager</option>
  <option value="Officer">Officer</option>
  <option value="Supervisor">Supervisor</option>
  <option value="Assistant">Assistant</option>
</select>
    </tr>

	 <tr>
          <td><input type="submit"  value="Save" name="submit"/></td>
		<td><input type="reset" value="Clear" name="cancel" /></td>
		</tr>

    	
</table>
</form>
</center>
</html>