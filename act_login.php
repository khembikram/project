<?php
include 'connection.php';
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['pass']))
{
	$user=$_SESSION['user'];
	$pass=$_SESSION['pass'];
	$sel="SELECT username,userpassword from user_table where
	 username='$user' and userpassword='$pass'";
	 $query=mysql_query($sel);
	 $count=mysql_num_rows($query);
	 if($count>0)
	 {
	 	$row=mysql_fetch_array($query);
	 	$_SESSION['user']=$row['username'];
	 	header('location:home.php');
	 }
	 else
	 {
	 	header('location:index.php');
	 	$_SESSION['msg']="Invalid Username or Password";
	 }

}
else
{
	header('location:index.php');
	$_SESSION['msg']="Invalid attempt";
}

?>