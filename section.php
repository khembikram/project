<?php
$query = mysql_query("SELECT type FROM user_table WHERE username = '$user'");
$gettype = mysql_fetch_assoc($query);
if($gettype["type"] == 0{
//code for normal users
}elseif($gettype["type"] == 1){
//code for admins
}
?>