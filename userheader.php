

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">

ul {
	position: top center;
    font-family: Arial, Verdana;
	position: relative;
    font-size: 18px;
    margin: 0;
    padding: 1;
    list-style: none;
	
}
ul li {
    display: block;
    position: relative;
    float: left;
}
li ul {
    display: none;
	
}
ul li a {

    display: block;
    text-decoration: none;
    color: #ffffff;
    border-top: 1px solid #ffffff;
    padding: 5px 15px 5px 15px;
    background: #1e7c9a;
	position: relative;
    margin-left: 1px;
    white-space: nowrap;
	
}
ul li a:hover {
background: #3b3b3b;
}
li:hover ul {
    display: block;
    position: absolute;
}
li:hover li {
    float: none;
    font-size: 14px;
}
li:hover a { background: #3b3b3b; }
li:hover li a:hover {
    background: #1e7c9a;
}

</style>

</head>

<body><div><center><img src="image/welcome.gif" width="1100" height="90"2000 />


<ul id="menu">
    <li><a href="home.php">Home</a></li>
	<li><a href="#">Attendance Report</a> 
        <ul>
            <li><a href="report.php">View Attendance</a></li>
			<li><a href="searchuser.php">Search User Attendance</a></li>
        </ul>
    </li>
	
    <li><a href="#">About Us</a>
        <ul>
            <li><a href="introduction.php">Introduction</a></li>
            <li><a href="insidebranches.php">Inside Kathmandu Valley</a></li>
            <li><a href="outsidebranches.php">Outside Kathmandu Valley</a></li>
        </ul>
    </li>
    <li><a href="#">Intern Information</a>
        <ul>
            <li><a href="interninfoview.php">View Information</a></li>
            <li><a href="search.php">Search Information</a></li>
         
           
        </ul>
    </li>
	
	<li><a href="#">Employee Information</a>
        <ul>
            <li><a href="employeeinfoview.php">View Information</a></li>
            <li><a href="searchemployee.php">Search Information</a></li>
			
        </ul>
    </li>
	
	<li><a href="#">Message</a>
        <ul>
            <li><a href="message.php">Send Your Message</a></li>
           
            <li><a href="searchmessage.php">Search Message</a></li>
        </ul>
    </li>
    
	 <li><a href="password.php">Change Password</a>
	</li>
	 <li><a href="logout.php">Logout</a></li>
	 <li><a href="currentdate.php">Todays Date: <?php 
     date_default_timezone_set("Asia/Kathmandu");
echo date("D d M Y"." days"); 
?></a>   
    </li>
</ul></div></div>
 	
</body>
</html>
