


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
<link rel="stylesheet" type="text/css" href="css/afterloginuser.css" />
<link rel="shortcut icon" href="image/411.jpg"/>

</head>

<body>

<div id="header">
</div>
<div id="nav">
<ul>
    <li class='active'><a href="home.php"><?php echo "Welcome"."&nbsp".$_SESSION['sess_user']?></a>
	
	
	
	</li>
	<li><a href="#">About Us</a>
	<ul>
            <li><a href="introductionu.php">Introduction</a></li>
			<li><a href="Core Teamu.php">Core Team</a></li>
        </ul>
		</li>
	<li><a href="#">Attendance Report</a> 
        <ul>
            <li><a href="reportu.php">View Attendance</a></li>
			<li><a href="searchuseru.php">Search User Attendance</a></li>
        </ul>
    </li>
	
   
    
	<li><a href="#">Message</a>
        <ul>
           
            <li><a href="messageu.php">Send Message</a></li>
          
        </ul>
    </li>

    
	 <li><a href="passwordu.php">Change Password</a>	</li>
	 <li><a href="logoutu.php">Logout</a></li>
	 <li><a href="#"><?php 
echo date("D d M Y");  
?></a>    </li>
</ul>
</div>
</body>
