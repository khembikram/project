<?php
include"connection.php";

include "checksession.php";

if($_SESSION['sess_user'])
{
	//echo "Welcome ".$_SESSION['user'];
}

else
{
	
}
?>
<head>
<link rel="stylesheet" type="text/css" href="css/afterlogin.css" />
<link rel="shortcut icon" href="image/411.png"/>

</head>

<body>

<div id="header">
</div>
<div id="nav">
<ul>
    <li class='active'><a href="home.php"><?php echo "Welcome"."&nbsp".$_SESSION['sess_user']?></a>
	
	
	
	</li>
	<li><a href="#">Attendance Report</a> 
        <ul>
            <li><a href="report.php">View Attendance</a></li>
			<li><a href="searchuser.php">Search User Attendance</a></li>
        </ul>
    </li>
	
   
    <li><a href="#">Intern Information</a>
        <ul>
            <li><a href="interninfoview.php">View Information</a></li>
            <li><a href="interninfo.php">Entry Informtion</a></li>
			<li><a href="deletingintern.php">Delete Information</a></li>
            
            <li><a href="search.php">Search Information</a></li>
            <li><a href="updateintern.php?page=1">Update Information</a></li>
        </ul>
    </li>
	
	<li><a href="#">Employee Information</a>
        <ul>
            <li><a href="employeeinfoview.php">View Information</a></li>
            <li><a href="employInfo.php">Entry Informtion</a></li>
			<li><a href="deletingemployee.php">Delete Information</a></li>
            <li><a href="searchemployee.php">Search Information</a></li>
			<li><a href="updateemployee.php?page=1">Update Information</a></li>
        </ul>
    </li>
	
	<li><a href="#">Message</a>
        <ul>
           
            <li><a href="message_display.php">View Stored message</a></li>
            <li><a href="searchmessage.php">Search Message</a></li>
            <li><a href="deletingmessage.php">Delete Message</a></li>
        </ul>
    </li>
	<li ><a href="user.php">Users</a>	</li>
    
	 <li><a href="password.php">Change Password</a>	</li>
	 <li><a href="logout.php">Logout</a></li>
	 <li><a href="#"><?php 
echo date("D d M Y");  
?></a>    </li>
</ul>
</div>
</body>
