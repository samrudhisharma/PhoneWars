<?php
$host="localhost"; 
$username= "root";
$password= "maths@123";
$db_name= "website";
//$host="localhost"; // Host name 
//$username="phonewar_admin"; // Mysql username 
//$password="maths@123"; // Mysql password 
//$db_name="phonewar_website"; // Database name
mysql_connect("$host", "$username", "$password"); 
mysql_select_db("$db_name");
?>